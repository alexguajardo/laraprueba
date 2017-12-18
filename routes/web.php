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

Route::group(['prefix' => 'articles'], function () {

    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as'  => 'articlesview'
    ]);

});

// Ruta con parametros //
/*Route::get('nombre/{nombre}', function ($nombre) {
    return 'mi nombre es '.$nombre;
});*/

Route::get('/', function () {
    return view('welcome');
});
