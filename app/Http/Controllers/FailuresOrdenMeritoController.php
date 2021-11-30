<?php

namespace App\Http\Controllers;

use App\Http\Requests\OMStoreRequest;
use App\Models\FailuresOrdenMerito;
use App\Models\OrdenMerito;
use Illuminate\Http\Request;

class FailuresOrdenMeritoController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('index','show');
    }

    public function index()
    {
        $ordenmeritosfailures = FailuresOrdenMerito::paginate(10);
        return view('ordenmeritofail.index',['ordenmeritosfailures' => $ordenmeritosfailures]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FailuresOrdenMerito $ordenmeritofail)
    {
        return view('ordenmeritofail.show',['ordenmeritofail' => $ordenmeritofail]);
    }

    public function edit(FailuresOrdenMerito $ordenmeritofail)
    {

        return view('ordenmeritofail.edit',['orden'=> $ordenmeritofail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OMStoreRequest $request,FailuresOrdenMerito $ordenmeritofail)
    {
        $ordenmeritofail->update($request->validated());
        OrdenMerito::create($request->validated());
        $ordenmeritofail->delete();

        return redirect()->route('ordenmerito.index')->with('success','Operación realizada con éxito');

    }


    public function destroy(FailuresOrdenMerito $ordenmeritofail)
    {
        $ordenmeritofail->delete();
        return redirect()->route('ordenmeritofails.index')->with('success','Eliminación realizada con éxito');
    }

}
