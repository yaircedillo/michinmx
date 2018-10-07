<?php

namespace michinmx\Http\Controllers;

use Illuminate\Http\Request;

use michinmx\Http\Requests;

class estadocontroller extends Controller
{
    public function index()
    {
        //
    }
    
    public function create()
    {
    return view('admin.index');
    }
    
    public function store()
    {
      //  
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}