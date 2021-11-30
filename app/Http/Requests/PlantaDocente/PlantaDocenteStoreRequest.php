<?php

namespace App\Http\Requests\PlantaDocente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class PlantaDocenteStoreRequest extends FormRequest
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
            'division' => ['required'],
            'curso' => ['required','numeric'],
            'materia' => ['required','string','max:200'],
            'horasMensuales' => ['nullable'],
            'nivel_id' => ['required','numeric'],
            'escuela_id' => ['required','numeric'],
            'docente_id' => ['required','numeric'],
            'situacion_revista_id' => ['required','numeric'],
            Rule::unique('docente_escuelas')->where(
                    ['materia', '=', $this->materia],
                    ['division', '=', $this->division],
                    ['curso', '=', $this->curso],
                    ['escuela_id', '=', $this->escuela_id],
                    ['docente_id', '=', $this->docente_id],
                )
        ];
    }

    public function messages()
    {
        return [
                'division.required' => 'La division es obligatoria.',
                'curso.required' => 'El curso es obligatorio.',
                'materia.required' => 'La materia es obligatoria',
                'nivel_id.required' => 'El nivel es obligatorio.',
                'escuela_id.required' => 'La escuela es obligatoria',
                'docente_id.required' => 'El docente es obligatorio.',
                'situacion_revista_id' => 'La situacion de revista es obligatoria'


        ];
    }
}
