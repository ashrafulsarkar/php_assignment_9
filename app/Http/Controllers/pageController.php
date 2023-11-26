<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function home(){
        return view("home");
    }
    function about()
    {
        return view("about");
    }
    function contact()
    {
        return view("contact");
    }
    function projects(){
        return view("projects");
    }
}
