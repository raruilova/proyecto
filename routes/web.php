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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','PublicController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('campuses', 'CampusController');
Route::resource('bars', 'BarController');
Route::resource('menus', 'MenuController');
Route::resource('preferencias', 'PreferenciaController');
Route::resource('buzons', 'BuzonController');
Route::resource('snacks', 'SnackController');
//Reportes 
Route::get('reportes','ReporteController@index')->name('reportes.index');
Route::get('reportes/preferencias','ReporteController@preferencias')->name('reportes.preferencias');
Route::get('reportes/buzon','ReporteController@bares')->name('reportes.buzons');
Route::get('reportes/buzon','ReporteController@bares')->name('reportes.buzons');
Route::get('reportes/grafica','ReporteController@grafica')->name('reportes.grafica');


