<?php

use App\Http\Controllers\ContainersController;
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


Route::get('/containers', 'App\Http\Controllers\ContainersController@index')->name('index');

Route::get('/containers/create', 'App\Http\Controllers\ContainersController@create')->name('create');
Route::post('/containers', 'App\Http\Controllers\ContainersController@store')->name('store');
Route::delete('/containers/{id}', 'App\Http\Controllers\ContainersController@destroy')->name('destroy');

Route::get('/containers/{id}/edit', 'App\Http\Controllers\ContainersController@edit')->name('edit');
Route::put('/containers/{id}', 'App\Http\Controllers\ContainersController@update')->name('update');


Route::get('/containers/move/{id}', 'App\Http\Controllers\ContainersMovementController@create')->name('createmove');
Route::post('/containers/move/{id}', 'App\Http\Controllers\ContainersMovementController@store')->name('storemove');

Route::get('/containers/details/{id}', 'App\Http\Controllers\ContainersController@show')->name('relatorio');

Route::get('/containers/details/{idCliente}/{idMovimento}/edit', 'App\Http\Controllers\ContainersMovementController@edit')->name('editmove');
Route::put('/containers/details/{idCliente}/{idMovimento}/', 'App\Http\Controllers\ContainersMovementController@update')->name('updatemove');
Route::delete('/containers/details/{idCliente}/{idMovimento}','App\Http\Controllers\ContainersMovementController@destroy')->name('destroymove');

Route::get('/containers/relatorios', 'App\Http\Controllers\ContainersController@relatorios')->name('relatorios');





