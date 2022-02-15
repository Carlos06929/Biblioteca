<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/autor.index', [AutorController::class, 'index'])->name('autor.index');
    Route::get('/autor.create', [AutorController::class, 'create'])->name('autor.create');
    Route::post('/autor.store', [AutorController::class, 'store'])->name('autor.store');
    Route::get('/autor.edit', [AutorController::class, 'edit'])->name('autor.edit');
    Route::get('/autor.edit/{autor}', [AutorController::class, 'edit'])->name('autor.edit');
    Route::PUT('/autor.update/{autor}',[AutorController::class,'update'])->name('autor.update');
    Route::delete('/autor.delete/{id}',[AutorController::class,'destroy'])->name('autor.destroy');

    Route::get('/autor.show', [AutorController::class, 'show'])->name('autor.show');

});
