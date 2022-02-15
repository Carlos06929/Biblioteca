<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\InformesController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/informe.index', [InformesController::class, 'index'])->name('informe.index');
    Route::get('/informe.create', [InformesController::class, 'create'])->name('informe.create');
    Route::post('/informe.store', [InformesController::class, 'store'])->name('informe.store');
    Route::get('/informe.edit', [InformesController::class, 'edit'])->name('informe.edit');
    Route::get('/informe.show', [InformesController::class, 'show'])->name('informe.show');
    Route::get('informe.Excel/',[InformesController::class, 'ExportExcel'])->name('informe.excel');
    Route::get('/informe.pdf',[InformesController::class, 'ExportPdf'])->name('informe.pdf');


});
