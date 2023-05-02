<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\CarteleraController;
use App\Http\Controllers\ListadoController;
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


// Vista Conocenos
Route::get('/conocenos', [ConocenosController::class, 'conocenos']);

// Vista Cartelera
Route::get('/cartelera', [CarteleraController::class, 'cartelera' ]);

Route::post('Enviarmovie', 'App\Http\Controllers\HorarioController@store')->name('store');


//Agregar Cartelera
Route::get('/horario', function () {
    return view('cartelera_add');
});

// Editar Cartelera
Route::get('/edit/{id}',[ListadoController::class, 'edit']);

// Borrar Cartelera
Route::get('/erase/{id}', [ListadoController::class, 'erase']);

// Mostrar listado
Route::get('/listado', [ListadoController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
