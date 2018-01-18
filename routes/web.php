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

Route::get('/users', 'UserSettings\UsersController@index')->name('users.index');
Route::put('/users/{id}', 'UserSettings\UsersController@update')->name('users.update');

Route::get('/calculadoras/rm', 'Calculators\RmController@index')->name('calculadoraRm');
Route::get('/calculadoras/wilks', 'UserSettings\WilksController@index')->name('calculadoraWilks');
Route::get('/calculadoras/imc', 'UserSettings\IcmpController@index')->name('calculadoraImc');
