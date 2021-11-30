<?php

namespace App\Http\Controllers;

use App\Models\DocenteEscuela;
use App\Models\Nivel;
use App\Models\SituacionRevista;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PlantaDocente\PlantaDocenteStoreRequest;
use App\Models\Docente;
use App\Models\Escuela;
use PhpParser\Comment\Doc;

class PlantaController extends Controller
{

    public function __construct()
    {
        $this->middleware('encargado');
    }
    public function index()
    {

        $id = Auth::user()->id;
        $escuelas = User::find($id)->escuelas;
        return view('plantadocente.index',compact('escuelas'));
    }

    public function index2($escuela)
    {
        $niveles = Nivel::all();
        $situaciones = SituacionRevista::all();
        $docentes = Docente::all();
        $docentesEscuelas = DocenteEscuela::all()->where('escuela_id','=',$escuela);
        return view('plantadocente.index2',compact('docentesEscuelas','escuela','niveles','situaciones','docentes'));
    }

    public function create()
    {
        $niveles = Nivel::all();
        $situaciones = SituacionRevista::all();
        $docentes = Docente::all();
        return view('plantadocente.create',compact('niveles','situaciones','docentes'));
    }

    public function create2($escuela)
    {
        $niveles = Nivel::all();
        $situaciones = SituacionRevista::all();
        $docentes = Docente::all();
        $escuela = Escuela::findorfail($escuela);
        return view('plantadocente.create',compact('niveles','situaciones','docentes','escuela'));
    }


    public function store(PlantaDocenteStoreRequest $request)
    {
        try{
            DocenteEscuela::create($request->validated());
            return back()->with('success','Planta agregada correctamente');
        }
        catch (\Exception $e){
            return back()->with('error','Error al agregar planta');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocenteEscuela  $docenteEscuela
     * @return \Illuminate\Http\Response
     */
    public function show(DocenteEscuela $plantadocente)
    {
        return view('plantadocente.show',compact('plantadocente'));
    }


    public function edit(DocenteEscuela $docenteEscuela)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocenteEscuela  $docenteEscuela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocenteEscuela $docenteEscuela)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocenteEscuela  $docenteEscuela
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocenteEscuela $docenteEscuela)
    {
         dd('destroy');
    }



}
