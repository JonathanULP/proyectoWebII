<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocenteEscuela extends Model
{
    use SoftDeletes;

    protected $table = 'docente_escuelas';

    protected $fillable = [
        'division',
        'curso',
        'materia',
        'horasMensuales',
        'nivel_id',
        'escuela_id',
        'docente_id',
        'situacion_revista_id'
    ];


    public function docente()
    {
        return $this->belongsTo('App\Models\Docente')->withTrashed();
    }

    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela')->withTrashed();
    }

    public function situacion_revista()
    {
        return $this->belongsTo('App\Models\SituacionRevista');
    }

    public function nivel()
    {
        return $this->belongsTo('App\Models\Nivel');
    }
}
