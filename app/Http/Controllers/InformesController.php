<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\OrdenMerito;
use Illuminate\Support\Facades\DB;

class InformesController extends Controller
{
    public function getEscuelas()
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
        $promedioDePersonasPorCargo=OrdenMerito::selectRaw('cargo,count(*)/'.$todo.'*100 as Promedio')
                                                    ->groupBy('cargo')
                                                    ->get();

        $inscripcionesSinCargo=OrdenMerito::selectRaw('localidad,count(*) as PersonasSinCargo')
                                              ->whereNull('cargo')
                                              ->groupBy('localidad')
                                              ->get();
        dd($inscripcionesSinCargo);

        return response()->json([$personas,$promedioDePersonasPorCargo]);


    }

    public function getPersonas()
    {
        $data = DB::table('orden_meritos')
                ->select('*')
                ->get();

    }
}
