<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;






Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){

    Route::resource('estudiante',EstudianteController::class)->names('estudiante');
    Route::get('cishow/{estudiante}',[EstudianteController::class, 'cishow'])->name('estudiante.cishow');
    Route::get('pdfAll',[EstudianteController::class, 'ExportPdf'])->name('estudiante.pdfAll');
    Route::get('pdfEstudiante/{estudiante}',[EstudianteController::class, 'pdfEstudiante'])->name('estudiante.pdfEstudiante');
    Route::get('ExcelAll/',[EstudianteController::class, 'ExportExcel'])->name('estudiante.excelAll');

});
