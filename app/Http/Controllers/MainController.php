<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showNumber($param)
    {
        return view('welcome', compact('param'));
    }
}
