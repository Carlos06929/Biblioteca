<?php
use App\Http\Controllers\Busquedas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FuncionalController;
use App\Http\Controllers\InstitucionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('inicio');
}); */
Route::get('/',[InicioController::class,'index'])->name('inicio');


Route::group(['middleware' => ['auth','verified','can:Gestion de Usuarios']], function (){

Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('user/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('user/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('user/{id}',[UserController::class,'destroy'])->name('users.destroy');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('user', [UserController::class, 'store'])->name('users.store');

});


// inicio y funcionalidades
Route::get('/funcional',[FuncionalController::class,'index'])->name('funcional')->middleware(['auth','verified']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth','verified']);

Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['auth','verified']], function (){

//Datos de instituciones
Route::get('/institucion', [InstitucionController::class, 'index'])->name('institucion');
Route::get('/institucion.create', [InstitucionController::class, 'create'])->name('institucion.create');
Route::post('/institucion.store', [InstitucionController::class, 'store'])->name('institucion.store');
Route::get('/institucion.edit', [InstitucionController::class, 'edit'])->name('institucion.edit');
Route::put('/institucion.update', [InstitucionController::class, 'update'])->name('institucion.update');
///subir imagen en datos institucionales
Route::post('/dinstitucion/imagen',[InstitucionController::class, 'imagen'])->name('institucion.imagen');
Route::post('/dinstitucion/borrarimagen',[InstitucionController::class, 'borrarimagen'])->name('institucion.borrar');


});
//sin necesidad de autenticacion // portada
// Route::get('/inicio',[InicioController::class,'index'])->name('inicio');

// busquedas de pdfs
Route::get('/busqueda',[Busquedas::class,'index'])->name('busqueda');








