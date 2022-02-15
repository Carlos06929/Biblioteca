<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsesoresController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/asesores.index', [AsesoresController::class, 'index'])->name('asesores.index');
    Route::get('/asesores.create', [AsesoresController::class, 'create'])->name('asesores.create');
    Route::post('/asesores.store', [AsesoresController::class, 'store'])->name('asesores.store');
    Route::get('/asesores.edit/{asesores}', [AsesoresController::class, 'edit'])->name('asesores.edit');
    Route::PUT('/asesores.update/{asesores}',[AsesoresController::class,'update'])->name('asesores.update');
    Route::delete('/asesores.delete/{id}',[AsesoresController::class,'destroy'])->name('asesores.destroy');



});
