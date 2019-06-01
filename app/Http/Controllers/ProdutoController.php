<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
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
        $produtos = Produto::all();
        return view('dashboard.Produto.index', compact('produtos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Produto.create');
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
        'descricao'=>'required|string',
        'tamanho'=>'required|string',
        'peso'=>'required|string',
        'id_categoria'=>'required|integer',
        'dirFotoProd' => 'required|mimes:jpeg,jpg,png' ,

    ]);


    $produto = new Produto([
        'nome'=> $request->get('nome'),
        'descricao'=> $request->get('descricao'),
        'tamanho'=> $request->get('tamanho'),
        'peso'=> $request->get('peso'),
        'id_categoria'=> $request->get('id_categoria'),
        'dirFotoProd'=>$request->file('dirFotoProd')->store('dirFotoProd'),


    ]);

    $produto->save();

    return redirect('dashboard')->with('success', 'Produto foi adicionada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.Produto.show', ['produto'=>Produto::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('dashboard.Produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $id)
    {
        $produto = Produto::find($id);

        $produto->nome = $request->get('nome');
        $produto->descricao = $request->get('descricao');
        $produto->tamanho = $request->get('tamanho');
        $produto->peso = $request->get('peso');
        $produto->id_categoria = $request->get('id_categoria');
        $produto->dirFotoProd = $request->get('dirFotoProd');
        $produto->save();

        return redirect('dashboard.Produto')->with('success', 'Produto atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
