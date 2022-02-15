<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesisController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
  /*  Route::get('/tesis.index', [TesisController::class, 'index'])->name('tesis.index');
    Route::get('/tesis.create', [TesisController::class, 'create'])->name('tesis.create');
    Route::post('/tesis.store', [TesisController::class, 'store'])->name('tesis.store');
    Route::get('/tesis.edit', [TesisController::class, 'edit'])->name('tesis.edit');
    Route::get('/tesis.show', [TesisController::class, 'show'])->name('tesis.show');*/



    Route::resource('tesis',TesisController::class)->names('tesis');

});
