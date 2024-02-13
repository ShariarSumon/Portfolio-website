<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showUsers(){
        return view('welcome');

    }
    public function showHome(){
        return view('user');

    }
}
