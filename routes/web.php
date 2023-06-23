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
    return view('home');
})->name('home');

//Personas Formulario
Route::get('/inicio', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'index'])->name('personas.index');
Route::get('/create', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'create'])->name('personas.create');
Route::post('/store', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [\App\Http\Controllers\ExamenFinalBrandonAmperezController::class, 'destroy'])->name('personas.destroy');


Route::get('/pagina2', [\App\Http\Controllers\AlumnoController::class,  'pagina2'])->name('pagina2');
Route::get('/alumnos', [\App\Http\Controllers\AlumnoController::class,  'index'])->name('lista-alumnos');

