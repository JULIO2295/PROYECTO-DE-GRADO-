<?php

namespace sisEscuela\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'apellidos' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'direccion'=>'max:70',
            'telefono'=>'required|numeric',
            'fecha_nac'=>'required|date',
            'ci'=>'required|unique:persona|numeric',  
            
        ];
    }
}
