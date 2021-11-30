<?php

namespace App\Http\Requests\Escuela;

use Illuminate\Foundation\Http\FormRequest;

class EscuelaStoreRequest extends FormRequest
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

            'nombre' => ['required','min:3','max:30'],
            'cue' => ['required','min:9','max:9','regex:/^[0-9]+/','unique:escuelas'],
            'direccion' => ['required'],
            'bilingue' => ['required'],
            'telefono' => ['required','min:6','max:10'],
            'telefonointerno' => ['required','min:6','max:10'],
            'email' => ['required','unique:escuelas'],
            'cantidadAlumnosPromedio' => ['required'],
            'director' => ['required','string','min:5'],
            'orientacion' => ['required','string'],
            'user_id' => ['required','numeric'],
            'sector_id' => ['required','numeric'],
            'tipo_id' => ['required','numeric'],
            'nivel_id' => ['required','numeric'],
            'ambito_id' => ['required','numeric'],
            'categoria_id' => ['required','numeric'],
            'tipo_jornada_id' => ['required','numeric'],
            'tipo_secundario_id' => ['numeric'],
            'localidad_id' => ['required','numeric'],

        ];
    }

    public function messages()
    {
        return  [

            'nombre.required' => 'El nombre de la institucion es obligatoria.',
            'nombre.min' => 'El nombre es demasiado corto.',
            'nombre.max' => 'El nombre es demasiado largo.',

            'cue.required' => 'El cue de la institucion es obligatorio',
            'cue.unique' => 'El cue ya se encuentra en uso.',
            'cue.min' => 'El cue es demasiado corto',
            'cue.max' => 'El cue es demasiado largo',

            'telefono.required' => 'El telefono es obligatorio',
            'telefono.min' => 'El telefono es demasiado corto',
            'telefono.max' => 'El telefono es demasiado largo',

            'telefonointerno.required' => 'El telefono es obligatorio',
            'telefonointerno.min' => 'El telefono interno es demasiado corto',
            'telefonointerno.max' => 'El telefono interno es demasiado largo',

            'cantidadAlumnosPromedio.required' => 'La cantidad de alumnos es obligatorio',

            'director.required' => 'El director de la institucion es obligatorio',
            'director.min' => 'El nombre del director es demasiado corto',

            'orientacion.required' => 'La orientacion es obligatoria',
            'orientacion.min' => 'El nombre de la orientacion es demasiada larga',

            'sector_id.required' => 'El sector es obligatorio',
            'sector_id.numeric' => 'El valor debe ser numerico',

            'user_id.required' => 'El usuario es obligatorio',
            'user_id.numeric' => 'El valor debe ser numerico',

            'nivel_id.required' => 'El nivel es obligatorio',
            'nivel_id.numeric' => 'El valor debe ser numerico',

            'categoria_id.required' => 'La categoria es obligatoria',
            'categoria_id.numeric' => 'El valor debe ser numerico',

            'tipo_id.required' => 'El tipo es obligatorio',
            'tipo_id.numeric' => 'El valor debe ser numerico',

            'ambito_id.required' => 'El ambito es obligatorio',
            'ambito_id.numeric' => 'El valor debe ser numerico',

            'tipo_secundario_id.numeric' => 'El valor debe ser numerico',

            'localidad_id.required' => 'La localidad es obligatoria',
            'localidad_id.numeric' => 'El valor debe ser numerico',


        ];
    }
}
