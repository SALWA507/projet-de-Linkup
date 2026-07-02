<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/feed');
});

Route::middleware('auth')->group(function () {

    Route::get('/feed', [PostController::class, 'index'])
        ->name('feed');

    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');

    Route::get('/dashboard', function () {
        return redirect()->route('feed');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
