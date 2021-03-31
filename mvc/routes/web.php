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

Route::get('/avisos', function () {
    return view('avisos',
    ['nome' => 'karina',
    'mostrar' => true,
    'avisos' => [['id' => 1,
    'texto' => 'feriados agora'],
    ['id' => 2, 'texto' => 'feriados semana que vem']]]);
});

Route::get('/barbearia', function () {
    return view('barbearia',
    ['nome' => 'karina',
    'mostrar' => true,
    'produtos' => [['id' => 1,
    'texto' => 'Na tesoura ou máquina, como preferir'],
    ['id' => 2, 'texto' => 'Corte e desenho profissional de barba'],
    ['id' => 3, 'texto' => 'Pacote completo de cabelo e barba']]]);
});

