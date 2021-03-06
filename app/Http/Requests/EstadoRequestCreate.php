<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class EstadoRequestCreate extends Request
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
           'estado' => 'required|unique:estado|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
        ];
    }
}
