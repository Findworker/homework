<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showNumber($param)
    {
        if (!is_numeric($param)) {
            return view('errors.validation-error');
        }
        return view('welcome', compact('param'));
    }
}
