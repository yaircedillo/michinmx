<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class validarrequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'user'=>'required',
            'password'=>'required',
        ];
    }
}
