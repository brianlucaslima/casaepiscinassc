<?php

namespace App\Http\Controllers;

use App\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
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
      $subcategorias = Subcategoria::all();
      return view('dashboard.Subcategoria.index', compact('subcategorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Subcategoria.create');
        //
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
        'nome'=>'required',
        'id_parente'=>'required'
    ]);


    $subcategoria = new Subcategoria([
        'nome'=> $request->get('nome'),
        'id_parente'=>$request->get('id_parente')
    ]);

    $subcategoria->save();

    return redirect('dashboard')->with('success', 'Sub-Categoria foi adicionada!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.Subcategoria.show', ['subcategoria'=>Subcategoria::findOrFail($id)]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $subcategoria = Subcategoria::find($id);
          return view('dashboard.Subcategoria.edit', compact('subcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategoria $id)
    {
        $subcategoria = Subcategoria::find($id);

        $subcategoria->nome = $request->get('nome');
        $subcategoria->save();

        return redirect('dashboard.Subcategoria')->with('success', 'Sub-Categoria atualizado');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategoria $subcategoria)
    {
        //
    }
}
