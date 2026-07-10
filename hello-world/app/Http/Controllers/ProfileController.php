<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    // add method here
    function show(): View
    {
        return view('Profile');
    }
}
