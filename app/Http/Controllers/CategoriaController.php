<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
      $categorias = Categoria::all();
      return view('dashboard.Categoria.index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Categoria.create');
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
        'nome'=>'required'
    ]);


    $categoria = new Categoria([
      'nome'=> $request->get('nome'),
      'categoria_pai'=> $request->get('categoria_pai')
    ]);

    $categoria->save();

    return redirect('dashboard')->with('success', 'Categoria foi adicionada!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.Categoria.show', ['categoria'=>Categoria::findOrFail($id)]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $categoria = Categoria::find($id);
          return view('dashboard.Categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nome = $request->get('nome');
        $categoria->categoria_pai = $request->get('categoria_pai');
        $categoria->save();

        return redirect('dashboard.Categoria')->with('success', 'Categoria atualizado');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
