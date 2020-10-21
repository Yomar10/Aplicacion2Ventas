<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//inicio
Route::get('/inicio',function(){
    return view('inicio.index');
})->name('inicio.index');
//Clientes
Route::get('/clientes','ClienteController@index')->name('cliente.index');
Route::get('/clientes/create','ClienteController@create')->name('cliente.create');
Route::post('/clientes/store','ClienteController@store')->name('cliente.store');
Route::get('/clientes/edit/{id}','ClienteController@edit')->name('cliente.edit');
Route::put('/clientes/update/{id}','ClienteController@update')->name('cliente.update');
Route::get('/clientes/delete/{id}','ClienteController@delete')->name('cliente.delete');
Route::delete('/clientes/destroy/{id}','ClienteController@destroy')->name('cliente.destroy');

//Categoría
Route::get('/categorias','CategoriaController@index')->name('categoria.index');
Route::get('/categorias/create','CategoriaController@create')->name('categoria.create');
Route::post('/categorias/store','CategoriaController@store')->name('categoria.store');
Route::get('/categorias/edit/{id}','CategoriaController@edit')->name('categoria.edit');
Route::put('/categorias/update/{id}','CategoriaController@update')->name('categoria.update');
Route::get('/categorias/delete/{id}','CategoriaController@delete')->name('categoria.delete');
Route::delete('/categorias/destroy/{id}','CategoriaController@destroy')->name('categoria.destroy');
