<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OMStoreRequest extends FormRequest
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


    public function rules()
    {
        return [
            'region' => 'required|between:1,6',
            'nivel' => ['required','regex:/(Inicial|Primario|Secundario)/i'],
            'titulo' => 'max:100',
            'localidad' => 'max:50',
            'nombre' => 'max:50',
            'apellido' => 'max:50',
            'cargo' => 'max:100',
            'sexo' => 'in:Masculino,Femenino',
            'incumbencia' => ['regex:/(A1|A2|A3|B1|B2|B3|B4|B5|C1|C2|C3|C4|C5|NULL)/i'],
            'cuil' => 'unique:orden_meritos'
        ];
    }
}
