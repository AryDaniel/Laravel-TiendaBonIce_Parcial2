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
