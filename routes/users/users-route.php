<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::prefix('user')->name('user.')->middleware(['auth'])->group(function(){

    Route::get('user',[UserController::class,'index'])->name('user.index');

    Route::get('/show/{user}',[UserController::class,'show'])->name('show');

    Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');

    Route::post('/store',[UserController::class,'store'])->name('store');

    Route::get('/create',[UserController::class,'create'])->name('create');

    Route::put('/update/{user}',[UserController::class,'update'])->name('update');

    Route::delete('/delete',[UserController::class,'destroy'])->name('destroy');


});
