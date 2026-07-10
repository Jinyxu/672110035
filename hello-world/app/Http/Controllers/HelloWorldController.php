<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloWorldController extends Controller
{
    function show(): View 
    {
        return view('hello-world');
    }
}
