<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProfileController::class)
    ->prefix('/Profile')
    ->name('Profile.')
    ->group(static function () {
        Route::get('', 'show')->name('show');
    });
