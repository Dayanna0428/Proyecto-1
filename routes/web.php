<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\QualificationsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario',[EstudianteController::class,'create']); //http://lo
Route::post('/formulario',[EstudianteController::class,'store'])->name('product.store');

Route::get('/formulariod',[QualificationsController::class,'create']);
Route::post('/formulariod',[QualificationsController::class,'store'])->name('product.store');
