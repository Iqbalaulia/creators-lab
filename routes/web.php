<?php

use App\Http\Controllers\web\EventController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
