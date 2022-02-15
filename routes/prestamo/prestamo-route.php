<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PrestamoController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/prestamo.index', [PrestamoController::class, 'index'])->name('prestamo.index');
    Route::get('/prestamo.create', [PrestamoController::class, 'create'])->name('prestamo.create');
    Route::post('/prestamo.store', [PrestamoController::class, 'store'])->name('prestamo.store');
    Route::get('/prestamo.edit', [PrestamoController::class, 'edit'])->name('prestamo.edit');

});
