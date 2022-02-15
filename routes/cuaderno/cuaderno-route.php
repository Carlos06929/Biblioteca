<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CuadernosController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/cuaderno.index', [CuadernosController::class, 'index'])->name('cuaderno.index');
    Route::get('/cuaderno.create', [CuadernosController::class, 'create'])->name('cuaderno.create');
    Route::post('/cuaderno.store', [CuadernosController::class, 'store'])->name('cuaderno.store');
    Route::get('/cuaderno.edit', [CuadernosController::class, 'edit'])->name('cuaderno.edit');
    Route::get('/cuaderno.show', [CuadernosController::class, 'show'])->name('cuaderno.show');
    Route::get('cuaderno.Excel/',[CuadernosController::class, 'ExportExcel'])->name('cuaderno.excel');
    Route::get('/cuaderno.pdf',[CuadernosController::class, 'ExportPdf'])->name('cuaderno.pdf');


});
