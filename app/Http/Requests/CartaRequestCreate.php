<?php

namespace michinmx\Http\Requests;

use michinmx\Http\Requests\Request;

class CartaRequestCreate extends Request
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
            'descripcion' => 'required|regex:/^[A-Z,,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'precio' => 'required|regex:/^[0-9]{1,5}(\.?)[0-9]{1,2}$/',
            'id_tipo_c' => 'required',
            'id_personal' => 'required',
        ];
    }
}
