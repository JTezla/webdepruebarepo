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

Route::get('/usuario_nuevo','users_controller@nuevo');

Route::get('/usuarios','users_controller@index')->name('users.r');

Route::post('/usuario_nuevo','users_controller@crear')->name('users.nuevo.r');

Route::get('/usuarios/{user}/editar','users_controller@editar')->name('users.edit.r');

Route::put('/usuarios/{user}','users_controller@update')->name('users.update.r');

Route::get('/usuarios/detalles/{user}','users_controller@details')->name('users.details.r');


