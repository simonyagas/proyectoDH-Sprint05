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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacto', function(){
  return view('contacto');
});
Route::get('/faq', function(){
  return view('faq');
});
Route::get('/carrito/{{id}}', 'CartController@index');
Route::get('/productos','ProductosController@index');

Route::resource('products','ProductController');

Route::get('/perfil','UsuariosController@index');

Auth::routes();

Route::get('/carrito/{product}', 'CartController@store');
Route::post('/addtocart', 'CartController@store');
Route::get('/carrito', 'CartController@index')->middleware('auth');
Route::post('/cartclose', 'CartController@cartclose');
Route::get('/history', 'CartController@history')->middleware('auth');
