<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesController;





Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/plan.index', [PlanesController::class, 'index'])->name('plan.index');
    Route::get('/plan.create', [PlanesController::class, 'create'])->name('plan.create');
    Route::post('/plan.store', [PlanesController::class, 'store'])->name('plan.store');
    Route::get('/plan.edit/{plan}', [PlanesController::class, 'edit'])->name('plan.edit');
    Route::put('/plan.update/{plan}', [PlanesController::class, 'update'])->name('plan.update');
    Route::get('/plan.show/{plan}', [PlanesController::class, 'show'])->name('plan.show');
    Route::delete('/plan.destroy/{plan}', [PlanesController::class, 'destroy'])->name('plan.destroy');
    Route::get('/plan.ejemplar', [PlanesController::class, 'ejemplar'])->name('plan.ejemplar');

    Route::get('plan.Excel/',[PlanesController::class, 'ExportExcel'])->name('plan.excel');
    Route::get('/plan.pdf',[PlanesController::class, 'ExportPdf'])->name('plan.pdf');


});
