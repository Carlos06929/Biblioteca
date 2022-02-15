<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProyectosController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/proyecto.index', [ProyectosController::class, 'index'])->name('proyecto.index');
    Route::get('/proyecto.create', [ProyectosController::class, 'create'])->name('proyecto.create');
    Route::post('/proyecto.store', [ProyectosController::class, 'store'])->name('proyecto.store');
    Route::get('/proyecto.edit', [ProyectosController::class, 'edit'])->name('proyecto.edit');
    Route::get('/proyecto.show', [ProyectosController::class, 'show'])->name('proyecto.show');
    Route::get('proyecto.Excel/',[ProyectosController::class, 'ExportExcel'])->name('proyecto.excel');
    Route::get('/proyecto.pdf',[ProyectosController::class, 'ExportPdf'])->name('proyecto.pdf');


});
