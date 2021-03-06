<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;

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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});



Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');



Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui para</a> ir para a pagina inicial';
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
