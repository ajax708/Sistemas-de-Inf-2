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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'analisis' => 'AnalisisController',
    //'posts' => 'PostController'
]);

//parametro analisis
Route::get('paranalisis/{analisis}', 'ParametroAnalisisController@index')->name('paranalisis.index');
Route::resource('paranalisis', 'ParametroAnalisisController')->parameters([
    'paranalisis' => 'parametro'
])->except(['index']);

//cuali analisis
Route::resource('cualitativoanalisis', 'ValorCualitativoAnalisisController')->parameters([
	'cualitativoanalisis' =>'cualitativo'
])->except(['index','show','create']);

Route::resource('cuantitativoanalisis', 'ValorCuantitativoAnalisisController')->parameters([
	'cuantitativoanalisis' =>'cuantitativo'
])->except(['index','show','create']);

//ordenes
Route::resource('orden', 'OrdenController')->parameters([
'orden'=>'orden']);