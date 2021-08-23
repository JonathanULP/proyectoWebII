<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escuela extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre','cue','direccion','telefono','telefonointerno','email','cantidadAlumnosPromedio','bilingue','director','orientacion','user_id','sector_id','tipo_id','nivel_id','ambito_id','categoria_id','tipo_jornada_id','tipo_secundario_id','localidad_id'];
}
