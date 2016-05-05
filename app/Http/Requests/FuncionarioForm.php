<?php

namespace Almacen\Http\Requests;

use Almacen\Http\Requests\Request;

class FuncionarioForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required|min:5|max:45",
            "documento" => "required|min:5|max:500"
        ];
    }
}