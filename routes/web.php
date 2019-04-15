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

Route::post('/usuario_nuevo','users_controller@crear')->name('users.nuevo.r');

Route::get('/usuarios','users_controller@index')->name('users.r');

Route::get('/usuarios/detalles/{user}','users_controller@details')->name('users.details.r');

