<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class mainController extends Controller
{
    function showHome(): View
    {
        return view('home');
    }
    function showFriends(): View
    {
        return view('friends');
    }
    function showSchedule(): View
    {
        return view('schedule');
    }
    function showAboutMe(): View
    {
        return view('aboutme');
    }
}
