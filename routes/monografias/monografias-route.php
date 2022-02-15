<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MonografiasController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/monografias.index', [MonografiasController::class, 'index'])->name('monografias.index');
    Route::get('/monografias.create', [MonografiasController::class, 'create'])->name('monografias.create');
    Route::post('/monografias.store', [MonografiasController::class, 'store'])->name('monografias.store');
    Route::get('/monografias.edit', [MonografiasController::class, 'edit'])->name('monografias.edit');
    Route::get('/monografias.show', [MonografiasController::class, 'show'])->name('monografias.show');
    Route::get('monografias.Excel/',[MonografiasController::class, 'ExportExcel'])->name('monografias.excel');
    Route::get('/monografias.pdf',[MonografiasController::class, 'ExportPdf'])->name('monografias.pdf');


});
