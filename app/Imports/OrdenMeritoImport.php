<?php

namespace App\Imports;

use App\Models\OrdenMerito;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class OrdenMeritoImport implements ToModel ,WithValidation,WithHeadingRow, SkipsOnFailure
{
    use Importable,SkipsFailures;

    public function model(array $row)
    {
        return new OrdenMerito([
            'region' => $row['region'],
            'nivel' => $row['nivel'],
            'apellido' => $row['apellido'],
            'nombre' => $row['nombre'],
            'cuil' => $row['cuil'],
            'sexo' => $row['sexo'],
            'localidad' => $row['localidad'],
            'cargo' => $row['cargo_o_espacio_curricular'],
            'titulo1' => $row['titulo_1'],
            'titulo2' => $row['titulo_2'],
            'incumbencia' => $row['incumbencia']
        ]);
    }

    public function rules(): array
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
            'incumbencia' => ['nullable', 'regex:/(A1|A2|A3|B1|B2|B3|B4|B5|C1|C2|C3|C4|C5|NULL)/i'],
            'cuil' => 'unique:orden_meritos'
        ];

    }

    public function customValidationMessages()
    {
        return [
            'region.required' => 'La tupla debe contener una region.',
            'nivel.regex' => 'Los valores permitidos son: Inicial-Primario-Secundario'
        ];
    }
}
