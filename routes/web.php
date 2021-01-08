<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProdutosController;

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
Route::get('/', [CadastroController::class, 'index']);

Route::get('/cadastro/create', [CadastroController::class, 'create']);
Route::post('cadastro/create', [CadastroController::class, 'store'])->name('registrar_cadastro');



Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/show/{id}', [ProdutosController::class, 'show']);


Route::get('/produtos/create', [ProdutosController::class, 'create']);
Route::post('/produtos/create', [ProdutosController::class, 'store'])->name('registrar_produto');