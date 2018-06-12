<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class school extends Controller
{
    public function student()
    {
        return view('95191.student');
    }
    
    public function fees()
    {
        return view('95191.fees');
    }
}
