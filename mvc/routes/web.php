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
    return view('welcome');
});

Route::get('/avisos', function(){
        return view('avisos', array('nome' => 'Bono',
        							'mostrar' => true,
        							'avisos' => array(	[	'id' => 1,
        													'texto' => 'Feriados agora'],
        												[	'id' => 2,
        													'texto' => 'Feriado semana que vem'])));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'clientes'], function (){

	//Controlando o acesso com o middleware auth
Route::get('/listar',[App\Http\Controllers\ClientesController::class, 'listar'])->middleware('auth');

Route::get('/vendo', [App\Http\Controllers\NaoAcreditoController::class, 'vendo'])->middleware('auth');
});
