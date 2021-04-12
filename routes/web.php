<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListaController;

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


Route::resource('/Lista',ListaController::class);

Route::delete('Lista/{matricula}', 'ListaController@destroy')
->name('Lista.destroy');

Route::get('Lista/{estudiante}/edit', 'ListaController@edit')->name('Lista.edit');

Route::resource('Lista', 'App\Http\Controllers\ListaController', ['except' => ['create', 'edit']]);

Route::post('/edit/lista/{id}','ListaController@update');




