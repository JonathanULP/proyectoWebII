<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Localidad;
use Illuminate\Http\Request;
use App\Http\Requests\Docente\DocenteStoreRequest;
use App\Http\Requests\Docente\DocenteUpdateRequest;
class DocenteController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('index','show');
    }

    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index',compact('docentes'));
    }


    public function create()
    {
        $localidades = Localidad::all();
        return view('docente.create',compact('localidades'));
    }


    public function store(DocenteStoreRequest $request)
    {
        Docente::create($request->validated());
        return redirect()->route('docente.create')->with('success','Profesor creado con éxito');
    }


    public function show(Docente $docente)
    {
        return view('docente.show',compact('docente'));
    }


    public function edit(Docente $docente)
    {
        $localidades = Localidad::all();
        return view('docente.edit',compact('docente','localidades'));
    }


    public function update(DocenteUpdateRequest $request, Docente $docente)
    {
        $docente->update($request->validated());
        return redirect()->route('docente.index')->with('success','Profesor editado con éxito');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docente.index')->with('success','Profesor eliminado correctamente');

    }
}
