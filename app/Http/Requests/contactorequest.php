<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class contactorequest extends Request
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
            'area' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'email' => 'required|email',
            'name' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
        ];
    }
}
