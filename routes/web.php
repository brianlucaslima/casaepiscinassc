<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function(){
  return App\Produto::with('categorias')
  ->where('id_categoria',1)->get();
});

Route::get('/galeria', 'HomeController@galeria');
Auth::routes();

Route::resource('/', 'HomeController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('produtos', 'ProdutoController');
Route::resource('categorias', 'CategoriaController');
Route::resource('subcategorias', 'SubcategoriaController');
Route::resource('servicos', 'ServicoController');
Route::resource('galerias', 'GaleriaController');
