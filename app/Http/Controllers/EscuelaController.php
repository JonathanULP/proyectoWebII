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

class EscuelaController extends Controller
{

    public function index()
    {
        $escuela = Escuela::all();
        return view('escuela.index',compact('escuela'));
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
        //
    }

    public function edit(Escuela $escuela)
    {
        //
    }


    public function update(Request $request, Escuela $escuela)
    {
        //
    }


    public function destroy(Escuela $escuela)
    {
        //
    }
}
