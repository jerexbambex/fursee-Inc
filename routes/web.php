<?php

use App\Http\Controllers\Client\AboutUsController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ContactUsController;
use App\Http\Controllers\Client\TeamController;
use App\Http\Controllers\Dashboard\AdminBlogController;
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
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactUs');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contactUs.store');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    
    //Teams
    Route::get('/teams', [AdminTeamController::class, 'index'])->name('admin.team.index');
    Route::post('/teams', [AdminTeamController::class, 'store'])->name('admin.team.store');
    Route::patch('/teams/{team}', [AdminTeamController::class, 'update'])->name('admin.team.update');
    Route::delete('/teams/{team}', [AdminTeamController::class, 'destroy'])->name('admin.team.delete');

    //Blogs
    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blogs', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blogs/{blog}', [AdminBlogController::class, 'show'])->name('admin.blog.show');
    Route::get('/blogs/edit/{blog}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::patch('/blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('admin.blog.delete');
});
