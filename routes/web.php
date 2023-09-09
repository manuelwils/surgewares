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

Route::get(
    \App\Http\Controllers\RoutesController::$privacy, 
    \App\Livewire\Pages\Privacy::class)
    ->name(\App\Http\Controllers\RoutesController::$privacy);

Route::get(
    \App\Http\Controllers\RoutesController::$terms, 
    \App\Livewire\Pages\Terms::class)
    ->name(\App\Http\Controllers\RoutesController::$terms);
    
Route::get(
    \App\Http\Controllers\RoutesController::$about, 
    \App\Livewire\Pages\About::class)
    ->name(\App\Http\Controllers\RoutesController::$about);
