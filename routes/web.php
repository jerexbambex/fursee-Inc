<?php

use App\Http\Controllers\Client\AboutUsController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\TeamController;
use App\Http\Controllers\Dashboard\AdminTeamController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/teams', [TeamController::class, 'index'])->name('teams');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('/teams', [AdminTeamController::class, 'index'])->name('admin.team.index');
    Route::post('/teams', [AdminTeamController::class, 'store'])->name('admin.team.store');
    Route::patch('/teams/{team}', [AdminTeamController::class, 'update'])->name('admin.team.update');
    Route::delete('/teams/{team}', [AdminTeamController::class, 'destroy'])->name('admin.team.delete');
});