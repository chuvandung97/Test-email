<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TesterController extends Controller
{
    public function test() 
    {
        return view('welcome');
    }
}
