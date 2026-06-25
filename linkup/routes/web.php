<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('/feed');
});

Route::get('/feed', [PostController::class, 'index'])
    ->name('feed');
