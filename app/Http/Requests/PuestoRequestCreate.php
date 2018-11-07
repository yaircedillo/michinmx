<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class PuestoRequestCreate extends Request
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'puesto' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
              
        ];
    }
}
