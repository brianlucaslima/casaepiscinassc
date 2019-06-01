<?php

namespace App\Http\Controllers;
use App\Galeria;
use App\Categoria;
use App\Servico;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $galerias = Galeria::all();
      $categorias = Categoria::all();
      $servicos= Servico::all();

      return view('index', compact('galerias','categorias','servicos'));

    }

    public function galeria(){
      $galerias = Galeria::all();
      $categorias = Categoria::all();
      $servicos= Servico::all();

      return view('galeria', compact('galerias','categorias','servicos'));
    }
}
