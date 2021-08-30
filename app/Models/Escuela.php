<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escuela extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre','cue','direccion','telefono','telefonointerno','email','cantidadAlumnosPromedio','bilingue','director','orientacion','user_id','sector_id','tipo_id','nivel_id','ambito_id','categoria_id','tipo_jornada_id','tipo_secundario_id','localidad_id'];


    //----------------Relaciones-------------------------/


    public function categoria(){

        return $this->belongsTo('App\Models\Categoria');

    }

    public function user(){

        return $this->belongsTo('App\Models\User');
    }


    public function tipo_jornada(){

        return $this->belongsTo('App\Models\TipoJornada');
    }

    public function nivel(){

        return $this->belongsTo('App\Models\Nivel');
    }

    public function sector(){

        return $this->belongsTo('App\Models\Sector');
    }



    public function ambito(){

        return $this->belongsTo('App\Models\Ambito');
    }

    public function tipo(){

        return $this->belongsTo('App\Models\Tipo');
    }

    public function localidad(){

        return $this->belongsTo('App\Models\Localidad');
    }

    public function tipo_secundario(){

        return $this->belongsTo('App\Models\TipoSecundario');

    }

    public function docente_escuelas(){

    return $this->HasMany('App\Models\DocenteEscuela');
    }

}
