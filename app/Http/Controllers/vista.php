<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;

class vista extends Controller
{
    public function index()
    {
   
        return view('vista.index');
        
    }
}
