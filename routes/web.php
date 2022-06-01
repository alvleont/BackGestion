<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas del Sitio Web de PHE

Route::middleware('cache.headers:public;max_age=31536000;etag')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/innovation', function () {
        return view('services');
    })->name('innovation');

    Route::get('/digital-transformation', function () {
        return view('services');
    })->name('digital-transformation');

    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');

    Route::get('/privacy', function () {
        return view('welcome');
    })->name('privacy');



    Route::get('/actualidad', [Actualidad::class, 'index'])->name('actualidad');
    Route::get('/actualidad/{slug}', [Actualidad::class, 'post'])->name('post');

    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
    });

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');


    });

    require __DIR__.'/auth.php';

