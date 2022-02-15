<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PapController;
use App\Http\Controllers\SeminariosController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/seminario.index', [SeminariosController::class, 'index'])->name('seminario.index');
    Route::get('/seminario.create', [SeminariosController::class, 'create'])->name('seminario.create');
    Route::post('/seminario.store', [SeminariosController::class, 'store'])->name('seminario.store');
    Route::get('/seminario.edit', [SeminariosController::class, 'edit'])->name('seminario.edit');
    Route::get('/seminario.show', [SeminariosController::class, 'show'])->name('seminario.show');
    Route::get('seminario.Excel/',[SeminariosController::class, 'ExportExcel'])->name('seminario.excel');
    Route::get('/seminario.pdf',[SeminariosController::class, 'ExportPdf'])->name('seminario.pdf');


});
