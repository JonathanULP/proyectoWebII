<?php

namespace App\Http\Requests\Docente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DocenteUpdateRequest extends FormRequest
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
            'nombre' => ['required','min:3','max:20'],
            'apellido' => 'required|min:3|max:20',
            'cuil' => ['required',Rule::unique('docentes', 'cuil')->ignore($this->docente->id)],
            'titulo' => 'required|min:3|max:30',
            'categoriaTitulo' => 'required',
            'localidad_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del profesor es obligatorio',
            'apellido.required' => 'El apellido del profesor es obligatorio',
            'cuil.required' => 'El cuil del profesor es obligatorio',
            'titulo.required' => 'El titulo del profesor es obligatorio',
            'cuil.unique' => 'El cuil del profesor ya esta registrado',

        ];
    }
}
