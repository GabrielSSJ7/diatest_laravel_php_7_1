<?php

use \Illuminate\HTTP\Request;
use \Illuminate\Mail\Mailer;
use \App\Mail\sendMail;

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

Route::get('/', 'HomeController@index');


// PRODUTOS
Route::get('/produtos/{slug}', 'ProdutosController@index');
Route::get('/produtos/fabricante/{slug}', 'ProdutosController@fabIndex');
Route::get('/produtos/fabricante/{slug}/{pslug}', 'ProdutosController@fabProIndex');
Route::post('/produtos/search', 'ProdutosController@search');

//PRODUTO
Route::get('/produto/{slug}', 'ProdutoController@index');

//CONTATO
Route::get('/contato', 'ContatoController@index');
Route::post('/sendMail', 'ContatoController@sendMail');

//QUEM SOMOS
Route::get('/quem-somos', 'QuemSomosController@index');
