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

Route::get('/EscribeConmigo', function () {
    return view('index');
});

Route::get('/Nosotros', function () {
    return view('Nosotros');
});

Route::get('/PreguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
});
Route::get('/NewsFeed','WrittingsController@newsfeed');

Route::get('/Reglas', function () {
    return view('Condiciones');
  });

  Route::get('/MisEscritos', function () {
      return view('MisEscritos');
    });
