<?php

use App\Http\Controllers\EstudianteController;
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

Route::get('/registrarEstudiante', [EstudianteController::class,'vistaRegistrarEstudiante'])->name('estudianteIndex');

Route::post('/registrarEstudiante', [EstudianteController::class,'registrarEstudiante'])->name('estudianteStorage');

Route::get('/', [EstudianteController::class,'mostrarEstudiante'])->name('estudianteList');
