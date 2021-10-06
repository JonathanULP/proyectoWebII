<?php

namespace App\Http\Requests\Docente;

use Illuminate\Foundation\Http\FormRequest;

class DocenteStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => ['required','min:3','max:20','regex:/^[A-Z]{1}[a-z]+/'],
            'apellido' => ['required','min:3','max:20','regex:/^[A-Z]{1}[a-z]+/'],
            'cuil' => ['required','unique:docentes','regex:/^[0-9]{11}/'],
            'titulo' => ['required','min:3','max:30','regex:/^[A-Za-z]+/'],
            'categoriaTitulo' => ['required','numeric'],
            'localidad_id' => ['required','numeric']
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del profesor es obligatorio',
            'nombre.regex' => 'El nombre no es valido',
            'nombre.min' => 'El nombre es demasiado corto',
            'nombre.max' => 'El nombre es demasiado largo',

            'apellido.required' => 'El apellido del profesor es obligatorio',
            'apellido.regex' => 'El apellido no es valido',
            'apellido.min' => 'El apellido es demasiado corto',
            'apellido.max' => 'El apellido es demasiado largo',


            'cuil.required' => 'El cuil del profesor es obligatorio',
            'cuil.unique' => 'El cuil ya esta en uso.',
            'cuil.regex' => 'El formato del cuil no es valido',



            'titulo.required' => 'El titulo del profesor es obligatorio',
            'titulo.regex' => 'El titulo no es valido.',

            'categoriaTitulo.required' => 'La categoria del titulo es obligatorio',
            'categoriaTitulo.numeric' => 'El valor debe ser numerico'

        ];
    }
}
