<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class ClientesRequestCreate extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'nombre' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_pat' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_mat' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'genero' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'calle' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'colonia' => 'required|alpha|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'cp'   =>  'required|max:5',
            'correo' => 'required|email',
            'telefono'=>'required|max:10',
            'img'=> 'image|mimes:jpeg,png,jpg,gif',     
        ];
    }
}
