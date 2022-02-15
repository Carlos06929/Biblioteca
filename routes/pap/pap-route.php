<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PapController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/pap.index', [PapController::class, 'index'])->name('pap.index');
    Route::get('/pap.create', [PapController::class, 'create'])->name('pap.create');
    Route::post('/pap.store', [PapController::class, 'store'])->name('pap.store');
    Route::get('/pap.edit', [PapController::class, 'edit'])->name('pap.edit');
    Route::get('/pap.show', [PapController::class, 'show'])->name('pap.show');
    Route::get('pap.Excel/',[PapController::class, 'ExportExcel'])->name('pap.excel');
    Route::get('/pap.pdf',[PapController::class, 'ExportPdf'])->name('pap.pdf');


});
