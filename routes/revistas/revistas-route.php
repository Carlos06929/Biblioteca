<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tag;
use App\Http\Controllers\RevistaController;




Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){
    Route::get('/revista.index', [RevistaController::class, 'index'])->name('revista.index');
    Route::get('/revista.create', [RevistaController::class, 'create'])->name('revista.create');
    Route::post('/revista.store', [RevistaController::class, 'store'])->name('revista.store');
    Route::get('/revista.edit/{revista}', [RevistaController::class, 'edit'])->name('revista.edit');
    Route::put('/revista.update/{revista}', [RevistaController::class, 'update'])->name('revista.update');
    Route::delete('/revista.destroy/{revista}', [RevistaController::class, 'destroy'])->name('revista.destroy');
    Route::get('/revista.show/{revista}', [RevistaController::class, 'show'])->name('revista.show');
    Route::get('Excel/',[RevistaController::class, 'ExportExcel'])->name('revista.excel');
    Route::get('pdf',[RevistaController::class, 'ExportPdf'])->name('revista.pdf');
    Route::get('/revista.ejemplares/{id}', [RevistaController::class, 'listaEjemplares'])->name('revista.ejemplares');
    Route::get('/revista.addEjemplar/{id}', [RevistaController::class, 'agregarEjemplar'])->name('revista.addEjemplar');
    Route::post('/revista.deleteEjemplar', [RevistaController::class, 'eliminarEjemplar'])->name('revista.delEjemplar');


   /*  Route::get('tags', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $tags = App\Tag::where('name', 'like', $term.'%')->lists('name', 'id');
        $valid_tags = [];
        foreach ($tags as $id => $tag) {
            $valid_tags[] = ['id' => $id, 'text' => $tag];
        }
        return Response::json($valid_tags);
    }); */
});
