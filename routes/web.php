<?php

use App\Http\Controllers\Client\AboutUsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');
