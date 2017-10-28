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
    if (Auth::guest()) {
      return view('auth.login');
    } else {
      return redirect('/home');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Peticion de productos
Route::get('Productos','Producto\ProductoController@index');
Route::post('ProductoAgregar','Producto\ProductoController@create');
Route::post('ProductoCrear','Producto\ProductoController@store');
Route::post('Productos/{id}','Producto\ProductoController@edit');
Route::post('ProductosGuardar/{id}','Producto\ProductoController@update');
Route::post('ProductosEliminar/{id}','Producto\ProductoController@destroy');
