<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';


Route::group(['middleware' => 'auth'],function()
{

    //----------- Inicio ---------------//

Route::get('inicio', [App\Http\Controllers\HomeController::class,'index'])->name('inicio');


//------- Rutas de escuela ---------//
Route::resource('escuela', App\Http\Controllers\EscuelaController::class);
Route::get('escuela/{escuela}/plantadocente',[App\Http\Controllers\PlantaController::class,'index2'])->name('plantadocente.index2');
//Route::get('escuela/{escuela}/plantadocente/create',[App\Http\Controllers\PlantaController::class,'create2'])->name('plantadocente.create2');


//----------- Rutas de docente -----------//
Route::resource('docente',  App\Http\Controllers\DocenteController::class);


//------------ Planta Docente-----------------//
Route::resource('plantadocente', App\Http\Controllers\PlantaController::class);
Route::get('plantadocente/{escuela}/create',[App\Http\Controllers\PlantaController::class,'create2'])->name('plantadocente.create2');

//----------------Orden Merito-----------------------------//


});

Route::resource('ordenmerito', App\Http\Controllers\ImportController::class);




