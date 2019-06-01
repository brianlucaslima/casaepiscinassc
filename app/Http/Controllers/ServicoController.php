<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
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
      $servicos = Servico::all();
      return view('dashboard.Servico.index', compact('servicos'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Servico.create');
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
        'descricao'=>'required',
        'dirFotoServ'=>'required|mimes:jpeg,jpg,png' ,
    ]);


    $servico = new Servico([
      'nome'=> $request->get('nome'),
      'descricao'=> $request->get('descricao'),
      'dirFotoServ'=>$request->file('dirFotoServ')->store('Servicos'),

    ]);

    $servico->save();

    return redirect('dashboard')->with('success', 'Serviço foi adicionada!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('dashboard.Servico.show', ['servico'=>Servico::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $servico = Servico::find($id);

      return view('dashboard.Servico.edit', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $id)
    {

          $servico = Servico::find($id);

          $servico->nome = $request->get('nome');
          $servico->descricao = $request->get('descricao');
          $servico->dirFotoServ = $request->get('dirFotoServ');
          $servico->save();

          return redirect('dashboard.Servico')->with('success', 'Servico atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servico $servico)
    {
        //
    }
}
