<?php

namespace App\Http\Controllers;

use App\Models\DocenteEscuela;
use App\Models\Escuela;
use App\Models\OrdenMerito;
use Illuminate\Support\Facades\DB;

class InformesController extends Controller
{
    public function getInformes()
    {
        $escuelas = Escuela::all();
        $total = $escuelas->count();

        $escuelasPorPosicion = DB::table('escuelas')
                ->selectRaw('count(escuelas.id) as total,provincias.nombre as provincia, departamentos.nombre as departamento, localidads.nombre as localidad')
                ->join('localidads','escuelas.localidad_id','=','localidads.id')
                ->join('departamentos','localidads.departamento_id','=','departamentos.id')
                ->join('provincias','departamentos.provincia_id','=','provincias.id')
                ->groupBy('departamento','localidad','provincia')
                ->get();


        $personas = DB::table('orden_meritos')
                ->select('count(DISTINCT cuil) as people')
                ->count();

        $todo = OrdenMerito::count();
        $promedioDePersonasPorCargo=OrdenMerito::selectRaw('cargo,count(*)/'.$todo.'*100 as promedio')
                                                    ->groupBy('cargo')
                                                    ->get();

        $inscripcionesSinCargo=OrdenMerito::selectRaw('localidad,count(*) as PersonasSinCargo')
                                              ->whereNull('cargo')
                                              ->groupBy('localidad')
                                              ->get();


        $docentesPorEscuelas = DocenteEscuela::selectRaw('escuelas.nombre,count(*) as cantidad')
                                                ->join('escuelas','escuelas.id','=','docente_escuelas.escuela_id')
                                                ->groupBy('escuelas.nombre')
                                                ->get();

        $escuelasPorNivel = DB::table('escuelas')
                ->selectRaw('count(escuelas.id) as total,nivels.nombre as nivel,ambitos.nombre as ambito')
                ->join('nivels','escuelas.nivel_id','=','nivels.id')
                ->join('ambitos','escuelas.ambito_id','=','ambitos.id')
                ->groupBy('nivel','ambito')
                ->get();
        dd($escuelasPorNivel);

        return view('informes.index',compact('escuelasPorPosicion','promedioDePersonasPorCargo','inscripcionesSinCargo','docentesPorEscuelas'));


    }

    public function getPersonas()
    {
        $data = DB::table('orden_meritos')
                ->select('*')
                ->get();

    }
}
