<?php

namespace App\Http\Requests\Provincia;

use Illuminate\Foundation\Http\FormRequest;

class ProvinciaStoreRequest extends FormRequest
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
            'nombre' => 'required|mix:5|max:20'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la provincia es obligatorio',
            'nombre.min' => 'El nombre es demasiado corto',
            'nombre.max' => 'El nombre es demasiado largo'
        ];
    }
}
