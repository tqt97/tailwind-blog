<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');
Route::get('/blog', function () {
    return view('frontend.blog.index');
})->name('blog');
Route::get('/blog/detail', function () {
    return view('frontend.blog.show');
});
Route::get('/contact', function () {
    return view('frontend.contact.index');
});

Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
