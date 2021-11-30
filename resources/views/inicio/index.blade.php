@extends('plantillageneral.plantillageneral')

@section('titulo')
    Inicio
@endsection

@section('content')

<div class="flex h-screen bg-gray-100">
    <div class="pt-2">
        @include('components.alert-messages')
    </div>

    <div class="container m-auto pb-8 bg-white shadow-lg sm:rounded-md p-10">

            <div class="px-2 pb-8 bg-white sm:p-6 text-gray-600 text-center font-bold text-2xl font-mono">
                <p class="text-black text-3xl">Hola {{ Auth::user()->name }}</p>
                <br><br>
                <p>Bienvenido  <br> a el sistema de planeamiento de <br> formación docente</p>
            </div>

    </div>
</div>
 @stop
