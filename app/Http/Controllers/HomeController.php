<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home View
    function homeView(){
        return view('home');
    }
}
