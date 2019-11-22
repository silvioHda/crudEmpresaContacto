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

Route::get('/', 'PageController@index');

Route::get('/empresa', 'PageController@indexEmpresa');

Route::get('/contacto', 'PageController@indexContacto');

Route::get('/editEmpresa/{id}', 'PageController@showEmpresa');

Route::get('/deleteEmpresa/{id}', 'PageController@deleteEmpresa');

Route::post('/storeEmpresa','PageController@storeEmpresa');

Route::post('/updateEmpresa/{id}', 'PageController@updateEmpresa');

