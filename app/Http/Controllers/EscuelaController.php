<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\Tipo;
use App\Models\Sector;
use App\Models\Nivel;
use App\Models\Ambito;
use App\Models\Categoria;
use App\Models\TipoJornada;
use App\Models\TipoSecundario;
use App\Models\Localidad;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\Escuela\EscuelaStoreRequest;
use App\Http\Requests\Escuela\EscuelaUpdateRequest;

class EscuelaController extends Controller
{

    public function index()
    {
        $escuelas = Escuela::cursorPaginate(5);
        return view('escuela.index',compact('escuelas'));
    }


    public function create()
    {
        $user = User::all();
        $sectores = Sector::all();
        $tipos = Tipo::all();
        $niveles = Nivel::all();
        $ambitos = Ambito::all();
        $categorias = Categoria::all();
        $t_jornada = TipoJornada::all();
        $t_secundaria = TipoSecundario::all();
        $localidades = Localidad::all();

        return view('escuela.create',compact('user','sectores','tipos','niveles','ambitos','categorias','t_jornada','t_secundaria','localidades'));
    }


    public function store(EscuelaStoreRequest $request)
    {
        Escuela::create($request->validated());
        return redirect()->route('escuela.create')->with('success','Escuela creada con éxito');
    }



    public function show(Escuela $escuela)
    {
        return view('escuela.show',compact('escuela'));
    }

    public function edit(Escuela $escuela)
    {
        $user = User::all();
        $sectores = Sector::all();
        $tipos = Tipo::all();
        $niveles = Nivel::all();
        $ambitos = Ambito::all();
        $categorias = Categoria::all();
        $t_jornada = TipoJornada::all();
        $t_secundaria = TipoSecundario::all();
        $localidades = Localidad::all();


        return view('escuela.edit',compact('escuela','user','sectores','tipos','niveles','ambitos','categorias','t_jornada','t_secundaria','localidades'));
    }


    public function update(EscuelaUpdateRequest $request, Escuela $escuela)
    {
        $escuela->update($request->validated());
        return redirect()->route('escuela.index')->with('success','Escuela editada correctamente');
    }


    public function destroy(Escuela $escuela)
    {
        $escuela->delete();
        return redirect()->route('escuela.index')->with('success','Escuela eliminada correctamente');
    }
}
