<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends Model
{
    use softDeletes;


    protected $fillable = ['nombre','apellido','cuil','titulo','categoriaTitulo','localidad_id'];



    //----------------------RELACIONES------------------------------//

    public function localidad()
    {
        return $this->belongsTo('App\Models\Localidad');
    }


}
