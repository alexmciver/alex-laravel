<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showHome'])->name('home');
Route::get('/about', [PageController::class, 'showAbout'])->name('about');
Route::get('/contact', [PageController::class, 'showContact'])->name('contact');

