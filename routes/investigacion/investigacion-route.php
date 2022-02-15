<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestigacionController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/investigacion.index', [InvestigacionController::class, 'index'])->name('investigacion.index');
    Route::get('/investigacion.create', [InvestigacionController::class, 'create'])->name('investigacion.create');
    Route::post('/investigacion.store', [InvestigacionController::class, 'store'])->name('investigacion.store');
    Route::get('/investigacion.edit/{investigacion}', [InvestigacionController::class, 'edit'])->name('investigacion.edit');
    Route::get('/investigacion.show/{investigacion}', [InvestigacionController::class, 'show'])->name('investigacion.show');
    Route::put('/investigacion.update/{investigacion}', [InvestigacionController::class, 'update'])->name('investigacion.update');
    Route::delete('/investigacion.destroy/{investigacion}', [InvestigacionController::class, 'destroy'])->name('investigacion.destroy');
    Route::get('/investigacion.ejemplar/{investigacion}', [InvestigacionController::class, 'ejemplar'])->name('investigacion.ejemplar');


    Route::get('investigacion.Excel/',[InvestigacionController::class, 'ExportExcel'])->name('investigacion.excel');
    Route::get('/investigacion.pdf',[InvestigacionController::class, 'ExportPdf'])->name('investigacion.pdf');


});
