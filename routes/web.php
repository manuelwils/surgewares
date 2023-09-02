<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get(
    \App\Http\Controllers\RoutesController::$home, 
    \App\Livewire\Pages\Home::class)
    ->name(\App\Http\Controllers\RoutesController::$home);

Route::get(
    \App\Http\Controllers\RoutesController::$products, 
    \App\Livewire\Pages\Products::class)
    ->name(\App\Http\Controllers\RoutesController::$products);
