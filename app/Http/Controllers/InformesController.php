<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Support\Facades\DB;

class InformesController extends Controller
{
    public function getEscuelas()
    {
        $escuelas = Escuela::all();
        $total = $escuelas->count();

        $data = DB::table('escuelas')
                ->selectRaw('count(escuelas.id) as total,provincias.nombre as provincia, departamentos.nombre as departamento, localidads.nombre as localidad')
                ->join('localidads','escuelas.localidad_id','=','localidads.id')
                ->join('departamentos','localidads.departamento_id','=','departamentos.id')
                ->join('provincias','departamentos.provincia_id','=','provincias.id')
                ->groupBy('departamento','localidad')
                ->get()
                ->groupBy(['provincia','departamento']);

        dd($data);


    }
}
