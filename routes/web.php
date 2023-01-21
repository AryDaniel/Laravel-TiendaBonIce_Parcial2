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
Route::delete('/helados/eliminar/{helado}',        [HeladeraController::class, 'destroy']) ->name('heladera.delete');

Route::get('/helados/editar/{helado}',      [HeladeraController::class, 'editar'])      ->name('heladera.edit');
Route::patch('/helados/update',               [HeladeraController::class, 'actualizar']) ->name('heladera.update');
/*
    patch   =   actualizar
*/