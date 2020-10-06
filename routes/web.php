<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::get('/orders',[OrderController::class, 'index']);
