<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MesaController;

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

Route::redirect('/', '/home');

Route::get('/home', function(){
    return view('home');
});   

Route::get('/fichas', function(){
    return view('fichas', ['nome' => 'teste']);
});

Route::get('/welcome', function(){
    return view('welcome');
});   

Route::get('/teste', function() {
    return view('teste', ['teste' => 'olá']);
});

Route::get('/minhaficha', function() {
    return view('minhaFicha');
});

