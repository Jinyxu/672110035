<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(MainController::class)
->group(static function (): void {
Route::get('/home','showHome')->name('home');

Route::get('/friends','showFriends')->name('friends');

Route::get('/teaching-schedule','showSchedule')->name('schedule');

Route::get('/about-me','showAboutMe')->name('aboutme');


});
    
