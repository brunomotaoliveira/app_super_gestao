<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
// nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function($nome, $categoria, $assunto, $mensagem) {
            echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});


/**
 * Principais verbos HTTP
 * 
 * get
 * post
 * put
 * patch
 * delete
 * options
 * 
 */
