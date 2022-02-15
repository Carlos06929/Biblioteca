<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TDirigidoController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/tdirigido.index', [TDirigidoController::class, 'index'])->name('tdirigido.index');
    Route::get('/tdirigido.create', [TDirigidoController::class, 'create'])->name('tdirigido.create');
    Route::post('/tdirigido.store', [TDirigidoController::class, 'store'])->name('tdirigido.store');
    Route::get('/tdirigido.edit/{tdirigido}', [TDirigidoController::class, 'edit'])->name('tdirigido.edit');
    Route::put('/tdirigido.update/{tdirigido}', [TDirigidoController::class, 'update'])->name('tdirigido.update');
    Route::delete('/tdirigido.destroy/{tdirigido}', [TDirigidoController::class, 'destroy'])->name('tdirigido.destroy');
    Route::get('/tdirigido.show/{tdirigido}', [TDirigidoController::class, 'show'])->name('tdirigido.show');

});
