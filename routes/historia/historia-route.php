<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HistoriasController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/historia.index', [HistoriasController::class, 'index'])->name('historia.index');
    Route::get('/historia.create', [HistoriasController::class, 'create'])->name('historia.create');
    Route::post('/historia.store', [HistoriasController::class, 'store'])->name('historia.store');
    Route::get('/historia.edit', [HistoriasController::class, 'edit'])->name('historia.edit');
    Route::get('/historia.show', [HistoriasController::class, 'show'])->name('historia.show');
    Route::get('historia.Excel/',[HistoriasController::class, 'ExportExcel'])->name('historia.excel');
    Route::get('/historia.pdf',[HistoriasController::class, 'ExportPdf'])->name('historia.pdf');


});
