<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;

class MichinmxController extends Controller
{
   public function index(){
       return view ('index');
    }
    public function inicio(){
        return view ('principal.inicio');
        }
  
   public function about(){
    return view ('about');
    }
    public function blog(){
    return view ('blog');
    }
    public function contact(){
    return view ('contact');
    }
    public function menu(){
    return view ('menu');
    }
    public function reservation(){
    return view ('reservation');
    }
    public function specialties(){
    return view ('specialties');
    }
    public function login(){
        return view ('layouts.login');
        }
  
   //public function admin(){
   //return view ('admin.index');
   // }


}
