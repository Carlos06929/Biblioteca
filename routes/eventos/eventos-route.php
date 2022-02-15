<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Evento\EventoController;



Route::prefix('evento')->name('evento.')->middleware(['auth'])->group(function(){

    Route::get('/',[EventoController::class,'index'])->name('index');

    Route::get('/show/{evento}',[EventoController::class,'show'])->name('show');

    Route::get('/edit/{evento}',[EventoController::class,'edit'])->name('edit');

    Route::post('/store',[EventoController::class,'store'])->name('store');

    Route::get('/create',[EventoController::class,'create'])->name('create');

    Route::put('/update/{evento}',[EventoController::class,'update'])->name('update');

    Route::delete('/delete',[EventoController::class,'destroy'])->name('destroy');

    Route::get('/dataTable/eventos',[EventoController::class,'traer'])->name('traer');

});
