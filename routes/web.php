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
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);


Route::prefix('/app')->group(function(){
    Route::get('/login', function(){ return 'Login';});
    Route::get('/clientes', function(){ return 'Clientes'; });
    Route::get('/fornecedores', function(){ return 'Fornecedores'; });
    Route::get('/produtos', function(){ return 'Produtos'; });
});


//ROTA DE TESTE
/* Route::get('/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - Informação
        ) {
            echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+'); */


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
