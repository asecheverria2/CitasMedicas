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
Route::resource('especialidads', App\Http\Controllers\EspecialidadController::class)->middleware(['auth']);
Route::resource('pacientes', App\Http\Controllers\PacienteController::class)->middleware(['auth']);
Route::resource('docespes', App\Http\Controllers\DocespeController::class)->middleware(['auth']);
Route::resource('doctors', App\Http\Controllers\DoctorController::class)->middleware(['auth']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
