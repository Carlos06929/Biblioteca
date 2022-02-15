<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/libro.index', [LibroController::class, 'index'])->name('libro.index');
    Route::get('/libro.create', [LibroController::class, 'create'])->name('libro.create');
    Route::post('/libro.store', [LibroController::class, 'store'])->name('libro.store');
    Route::get('/libro.edit/{id}', [LibroController::class, 'edit'])->name('libro.edit');
    Route::get('/libro.show/{id}', [LibroController::class, 'show'])->name('libro.show');
    Route::get('libro.Excel/',[LibroController::class, 'ExportExcel'])->name('libro.excel');
    Route::get('/libro.pdf',[LibroController::class, 'ExportPdf'])->name('libro.pdf');
    Route::put('/libro.update/{id}', [LibroController::class, 'update'])->name('libro.update');
    Route::delete('/libro.destroy/{id}', [LibroController::class, 'destroy'])->name('libro.destroy');
    Route::get('/libro.ejemplares/{id}', [LibroController::class, 'listaEjemplares'])->name('libro.ejemplares');
    Route::get('/libro.addEjemplar/{id}', [LibroController::class, 'agregarEjemplar'])->name('libro.addEjemplar');
    Route::post('/libro.deleteEjemplar', [LibroController::class, 'eliminarEjemplar'])->name('libro.delEjemplar');






});
