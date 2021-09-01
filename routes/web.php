<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/inicio', [App\Http\Controllers\HomeController::class,'index'])->name('inicio');


//------- Rutas de escuela ---------//
Route::resource('escuela', App\Http\Controllers\EscuelaController::class);



//----------- Rutas de docente -----------//
Route::resource('docente',  App\Http\Controllers\DocenteController::class);
