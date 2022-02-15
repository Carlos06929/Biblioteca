<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\PasantiasController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/pasantia.index', [PasantiasController::class, 'index'])->name('pasantia.index');
    Route::get('/pasantia.create', [PasantiasController::class, 'create'])->name('pasantia.create');
    Route::post('/pasantia.store', [PasantiasController::class, 'store'])->name('pasantia.store');
    Route::get('/pasantia.edit', [PasantiasController::class, 'edit'])->name('pasantia.edit');
    Route::get('/pasantia.show', [PasantiasController::class, 'show'])->name('pasantia.show');
    Route::get('pasantia.Excel/',[PasantiasController::class, 'ExportExcel'])->name('pasantia.excel');
    Route::get('/pasantia.pdf',[PasantiasController::class, 'ExportPdf'])->name('pasantia.pdf');


});
