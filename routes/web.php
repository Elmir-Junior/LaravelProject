<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
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

Route::get('/create', [CadastroController::class, 'create']);
Route::post('/create', [CadastroController::class, 'store'])->name('registrar_cadastro');