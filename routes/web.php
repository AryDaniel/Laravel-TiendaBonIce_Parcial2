<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeladeraController;

/*
    php artisan make:controller HeladeraController
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/helados', [HeladeraController::class, 'index'])->name('heladera.index');
