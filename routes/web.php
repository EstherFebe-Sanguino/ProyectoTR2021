<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\DetalleEvaluacionController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\TemaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('materias', MateriaController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('profesors', ProfesorController::class);
Route::resource('asistencias', AsistenciaController::class);
Route::resource('temas', TemaController::class);
Route::resource('preguntas', PreguntaController::class);
Route::resource('evaluacions', EvaluacionController::class);
Route::resource('detalleevaluacions', DetalleEvaluacionController::class);

