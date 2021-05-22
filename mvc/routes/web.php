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

/*
Route::group(['prefix' => 'clientes'], function (){

	//Controlando o acesso com o middleware auth
	//Route::get('/listar',[App\Http\Controllers\ClientesController::class, 'listar'])->middleware('auth');


});
*/
Route::group(['middleware' => ['auth']], function(){
	Route::resource('/clientes',App\Http\Controllers\ClientesController::class);
});

Route::group(['middleware' => ['auth']], function(){

	Route::resource('/users',App\Http\Controllers\UserController::class);
	Route::resource('/roles',App\Http\Controllers\RoleController::class);
});

Route::get('/produto/novo', 'ProductsController@create');
Route::post('/produto/novo', 'ProductsController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'ProductsController@show');
Route::get('/produto/editar/{id}', 'ProductsController@edit');
Route::post('/produto/editar/{id}', 'ProductsController@update')->name('alterar_produto');
Route::post('/produto/excluir/{id}', 'ProductsController@delete');
Route::post('/produto/excluir/{id}', 'ProductsController@destroy')->name('excluir.produto');
