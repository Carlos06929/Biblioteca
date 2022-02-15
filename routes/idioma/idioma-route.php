<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IdiomaController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/idioma.index', [IdiomaController::class, 'index'])->name('idioma.index');
    Route::get('/idioma.create', [IdiomaController::class, 'create'])->name('idioma.create');
    Route::post('/idioma.store', [IdiomaController::class, 'store'])->name('idioma.store');
    Route::get('/idioma.edit', [IdiomaController::class, 'edit'])->name('idioma.edit');
    Route::get('/idioma.edit/{idioma}', [IdiomaController::class, 'edit'])->name('idioma.edit');
    Route::PUT('/idioma.update/{id}',[IdiomaController::class,'update'])->name('idioma.update');
    Route::delete('/idioma.delete/{id}',[IdiomaController::class,'destroy'])->name('idioma.destroy');
    Route::get('/idioma.show', [IdiomaController::class, 'show'])->name('idioma.show');

});
