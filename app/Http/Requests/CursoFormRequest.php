<?php

namespace sisEscuela\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoFormRequest extends FormRequest
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
            'nombre' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'descripcion' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'idprofesor' => 'required|unique:curso',
        ];
    }
}
