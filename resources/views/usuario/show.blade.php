@extends('plantillageneral.plantillageneral')

@section('titulo')
    Mis Datos
@endsection

@section('content')


<div class="bg-white w-full rounded-lg shadow-xl">

    <div class="pt-2">
        @include('components.alert-messages')
    </div>

    <div class="md:grid md:grid-cols-2 hover:text-blue-900 md:space-y-0 space-y-1 py-7 border-b rounded pl-8">
        <h2 class="text-2xl">
            {{ $usuario->name}}
        </h2>
    </div>

    <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
        <p class="text-gray-600">
            EMAIL
        </p>
        <p>
            {{$usuario->email}}
        </p>
    </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TELÉFONO
            </p>
            <p>
                {{ ucwords($usuario->telefono) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                ROL
            </p>
            <p>
                {{ ucwords($usuario->rol->nombre) }}
            </p>
        </div>

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">


        <a href="{{ url()->previous() }}"
            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
             Regresar
        </a>

    </div>
</div>


@endsection


<script>
    $('button[name="close-modal"]').click(function (e) {
        e.preventDefault();
        toggleModal();
    })
    function toggleModal() {
        $('#modal').toggle();

    }
</script>
