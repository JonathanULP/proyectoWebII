<?php

namespace App\Http\Controllers;

use App\Imports\OrdenMeritoImport;
use App\Models\FailuresOrdenMerito;
use App\Models\OrdenMerito;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Importer;

class ImportController extends Controller
{


    public function index()
    {
        $ordenmeritos = OrdenMerito::paginate(5);
        return view('ordenmerito.index',compact('ordenmeritos'));
    }

    public function create()
    {
        return view('ordenmerito.create');
    }


    public function store(Request $request)
    {
        //$file = $request->file('file');
        //Excel::import(new OrdenMeritoImport,$file);

        /* $file = $request->file('file');
        Excel::import(new OrdenMeritoImport,$file);*/

        $import = new OrdenMeritoImport();
        $import->import(request()->file('file'));

        $failures = new FailuresOrdenMerito;



        foreach($import->failures() as $failure){

            $failures->region = $failure->values()["region"];
            $failures->nivel = $failure->values()["nivel"];
            $failures->apellido = $failure->values()["apellido"];
            $failures->nombre = $failure->values()["nombre"];
            $failures->cuil = $failure->values()["cuil"];
            $failures->sexo = $failure->values()["sexo"];
            $failures->localidad = $failure->values()["localidad"];
            $failures->cargo = $failure->values()["cargo_o_espacio_curricular"];
            $failures->titulo1 = $failure->values()["titulo_1"];
            $failures->titulo2 = $failure->values()["titulo_2"];
            $failures->incumbencia = $failure->values()["incumbencia"];

            $failures->save();
        }

        return back()->with('success','Importado con exito');
    }


    public function show($id)
    {
        return view('ordenmerito.show');
    }


    public function edit($id)
    {
        dd('edit');
    }


    public function update(Request $request, $id)
    {
        dd('update');
    }


    public function destroy($id)
    {
        dd('destroy');
    }
}
