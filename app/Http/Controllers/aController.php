<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aController extends Controller
{
    public function home(){
        return view('home');
    }
}
