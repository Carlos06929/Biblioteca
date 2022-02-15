<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/categoria.index', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/categoria.create', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::post('/categoria.store', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::get('/categoria.edit/{categoria}', [CategoriaController::class, 'edit'])->name('categoria.edit');
    Route::PUT('/categoria.update/{categoria}',[CategoriaController::class,'update'])->name('categoria.update');
    Route::delete('/categoria.delete/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

    Route::get('/categoria.show', [CategoriaController::class, 'show'])->name('categoria.show');


});
