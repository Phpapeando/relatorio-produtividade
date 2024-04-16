<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SysRelatProdutividadeController;
use App\Http\Controllers\SysLoginController;

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

Route::get('/login', [SysLoginController::class, 'index'])->name('login');
Route::post('/logar', [SysLoginController::class, 'store'])->name('logar');
Route::get('/sair', [SysLoginController::class, 'destroy'])->name('deslogar');

Route::group(['middleware' => 'auth'], function () {
    
    //Abre a view Index
    Route::get('/', [SysRelatProdutividadeController::class, 'index'])->name('index');

    //Envia os dados preenchidos na index para o banco de dados
    Route::POST('/enviar', [SysRelatProdutividadeController::class, 'store'])->name('relatorio-enviar');

    //Abre a view de selecionar os setores
    Route::get('/lista-de-relatorios', [SysRelatProdutividadeController::class, 'select'])->name('select');

    //Abre o relatório de cada respectivo setor - limitado aos 10 ultimos registros
    Route::get('/financeiro', [SysRelatProdutividadeController::class, 'financeiro'])->name('result-financeiro');
    Route::get('/vendas', [SysRelatProdutividadeController::class, 'vendas'])->name('result-vendas');
    Route::get('/posvendas', [SysRelatProdutividadeController::class, 'posvendas'])->name('result-posvendas');
    Route::get('/suporte', [SysRelatProdutividadeController::class, 'suporte'])->name('result-suporte');
    Route::get('/programacao', [SysRelatProdutividadeController::class, 'programacao'])->name('result-programacao');

    //Pesquisa
    Route::POST('/pesquisar', [SysRelatProdutividadeController::class, 'pesquisar'])->name('pesquisar'); 

    //Abre o relatório total de todos os setores
    Route::get('/financeiro-completo', [SysRelatProdutividadeController::class, 'financeiro_completo'])->name('result-financeiro-completo');
    Route::get('/vendas-completo', [SysRelatProdutividadeController::class, 'vendas_completo'])->name('result-vendas-completo');
    Route::get('/posvendas-completo', [SysRelatProdutividadeController::class, 'posvendas_completo'])->name('result-posvendas-completo');
    Route::get('/suporte-completo', [SysRelatProdutividadeController::class, 'suporte_completo'])->name('result-suporte-completo');
    Route::get('/programacao-completo', [SysRelatProdutividadeController::class, 'programacao_completo'])->name('result-programacao-completo'); 

});

Route::fallback(function () {
    return redirect()->route('login');
});















