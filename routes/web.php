<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which|
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/usuario_nuevo',function(){
	return view('usuario_nuevo');
});

Route::get('/usuarios','users_controller@index');

Route::get('/usuarios/usuario{id}','users_controller@details');