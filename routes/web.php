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
    return view('welcome');
});

Route::get('/contacto', function() {
  return view('contacto');
})->name('contacto');

Route::get('/blog/{identificador}', function($identificador){
  return view('blog',['identificador' => $identificador]);
})->name('blog');


Route::get('/blogConNombre/{identificador}/{nombre?}', function($identificador, $nombre){
    return view('blogConNombre',['identificador' => $identificador, 'nombre' => $nombre]);

})->where(array('identificador'=>'[0-9]+','nombre'=>'[a-zA-Z]+'))->name('blogConNombre');

Route::get('/saludo', 'SaludoController@saludo')->name('saludo');

Route::get('/saludoConNombre/{nombre}', 'SaludoController@saludoConNombre')->name('saludoConNombre');

Route::get('/saludoConNombreColor/{nombre}/{color?}', 'SaludoController@saludoConNombreColor')->name('saludoConNombreColor');