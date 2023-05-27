<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

//Route::view('/jogos', 'jogos', ['name'=>'GTA']);

//Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null)
//{
//    return view('jogos', ['idJogo'=>$id, 'nomeJogo'=>$name]);
//})->where(['id', '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::fallback(function()
{
    return "Erro ao localizar rota!";
});