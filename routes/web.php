<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Bruno";
    $idade = 24;
    $profissao = "Programadador";

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

