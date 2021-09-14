<?php

namespace App\Http\Controllers;

use App\Imports\OrdenMeritoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Importer;

class ImportController extends Controller
{


    public function index()
    {
        dd('index');
    }

    public function create()
    {
        return view('ordenmerito.create');
    }


    public function store(Request $request)
    {
        //$file = $request->file('file');
        //Excel::import(new OrdenMeritoImport,$file);

        /*$import = new OrdenMeritoImport();
        $import->import(request()->file('file'));*/

        $file = $request->file('file');
        Excel::import(new OrdenMeritoImport,$file);

        return back()->with('success','Importado con exito');
    }


    public function show($id)
    {
        dd('show');
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
