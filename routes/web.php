<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeladeraController;

/*
    php artisan make:model -ms
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/helados', [HeladeraController::class, 'index'])->name('heladera.index');
Route::get('/helados/create', [HeladeraController::class, 'create'])    ->name('heladera.create'); #Esta es la vista formulario
Route::post('/helados',        [HeladeraController::class, 'store'])    ->name('heladera.store'); #Este es el que va a manejar todo el proceso
Route::get('/helados/{helado}', [HeladeraController::class, 'show'])->name('heladera.show');
Route::get('/helados/eliminar/{id}',        [HeladeraController::class, 'destroy']) ->name('heladera.delete');