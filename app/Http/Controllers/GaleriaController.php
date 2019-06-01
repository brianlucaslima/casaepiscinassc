<?php

namespace App\Http\Controllers;

use App\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth');
     }


    public function index()
    {
      $galerias = Galeria::all();
      return view('dashboard.Galeria.index', compact('galerias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'titulo'=>'required',
        'cliente'=>'required|string',
        'cidade'=>'required|string',
        'dirFotoGaleria' => 'required|mimes:jpeg,jpg,png' ,

    ]);


    $galeria = new Galeria([
        'titulo'=> $request->get('titulo'),
        'cliente'=> $request->get('cliente'),
        'cidade'=> $request->get('cidade'),
        'dirFotoGaleria'=>$request->file('dirFotoGaleria')->store('Galeria'),


    ]);

    $galeria->save();

    return redirect('dashboard')->with('success', 'Foto foi adicionada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('dashboard.Galeira.show', ['galeria'=>Galeria::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $galeria = Galeria::find($id);

      return view('dashboard.Galeria.edit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $id)
    {
      $galeria = Produto::find($id);

      $galeria->titulo = $request->get('titulo');
      $galeria->cliente = $request->get('cliente');
      $galeria->cidade = $request->get('cidade');
      $galeria->dirFotoGaleria = $request->get('dirFotoGaleria');
      $galeria->save();

      return redirect('dashboard.Galeria')->with('success', 'Galeria atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        //
    }
}
