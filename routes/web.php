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

Route::get('/', function () {
    return view('index');
});

Route::get('cadastro', 'App\Http\Controllers\ControladorOrcamento@create');
Route::post('cadastro', 'App\Http\Controllers\ControladorOrcamento@store');
Route::resource('orcamentos', 'App\Http\Controllers\ControladorOrcamento');
Route::get('orcamentos/deletar/{id}', 'App\Http\Controllers\ControladorOrcamento@destroy');
Route::get('orcamentos/editar/{id}', 'App\Http\Controllers\ControladorOrcamento@edit');
Route::post('orcamentos/{id}', 'App\Http\Controllers\ControladorOrcamento@update');

