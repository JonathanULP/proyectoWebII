@extends('plantillageneral.plantillageneral')

@section('titulo')
    Escuela
@endsection

@section('content')


<div class="bg-white w-full rounded-lg shadow-xl">

    <div class="pt-2">
        @include('components.alert-messages')
    </div>

    <div class="md:grid md:grid-cols-2 hover:text-blue-900 md:space-y-0 space-y-1 py-7 border-b rounded pl-8">
        <h2 class="text-2xl">
            Escuela: {{ $escuela->nombre}}
        </h2>
    </div>

    <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
        <p class="text-gray-600">
            CUE
        </p>
        <p>
            {{$escuela->cue}}
        </p>
    </div>

    <div>
        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                DIRECCIÓN
            </p>
            <p>
                {{ ucwords($escuela->direccion) }}
                {{-- $reclamo->created_at->format('d-m-Y  h:i') . 'hs' --}}
            </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TELÉFONO
            </p>
            <p>
                {{ ucwords($escuela->telefono) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TELÉFONO INTERNO
            </p>
            <p>
                 {{ $escuela->telefonointerno}}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                EMAIL
            </p>
            <p>
                 {{ $escuela->email}}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                CANT. ALUMNOS PROMEDIO
            </p>
            <p>
                 {{ $escuela->cantidadAlumnosPromedio}}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                BILINGÜE
            </p>
            <p>
                 {{ $escuela->bilingue ? 'SI' : 'N0'}}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                DIRECTOR
            </p>
            <p>
                 {{ ucwords($escuela->director) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                ORIENTACIÓN
            </p>
            <p>
                 {{ ucwords($escuela->orientacion) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                ENCARGADO
            </p>
            <p>
                 {{ ucwords($escuela->user->name) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                SECTOR
            </p>
            <p>
                 {{ ucwords($escuela->sector->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TIPO
            </p>
            <p>
                 {{ ucwords($escuela->tipo->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                NIVEL
            </p>
            <p>
                 {{ ucwords($escuela->nivel->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                AMBITO
            </p>
            <p>
                 {{ ucwords($escuela->ambito->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                CATEGORIA
            </p>
            <p>
                 {{ ucwords($escuela->categoria->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TIPO JORNADA
            </p>
            <p>
                 {{ ucwords($escuela->tipo_jornada->nombre) }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TIPO SECUNDARIO
            </p>
            <p>
                 {{$escuela->tipo_secundario->nombre ?? 'Sin Asignar' }}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                LOCALIDAD
            </p>
            <p>
                {{ ucwords($escuela->localidad->nombre) }}
            </p>
        </div>

    </div>

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        @admin
        <a href="{{ route('escuela.index') }}"
            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Regresar
        </a>
        @endadmin

        @encargado
        <a href="{{ url()->previous() }}"
            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
             Regresar
        </a>
        @endencargado

        @admin
        <button class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
             onclick="toggleModal()" title="Eliminar">Eliminar
        </button>
        @endadmin

    </div>
</div>

{{--MODAL PARA ELIMINAR SUBSCRIPCION--}}

<div role="dialog" id="modal" style="display: none;">
    <div id="modal-content" style="z-index: 999999;"
        class=" overflow-x-hidden overflow-y-auto fixed inset-0 outline-none focus:outline-none justify-center items-center flex ">
        <div class="absolute my-6 mx-auto align-middle min-w-min">
            <div
                class=" rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none border-0">
                <!-- header -->
                <div
                    class=" flex items-start justify-between p-2 border-b border-solid border-gray-200 rounded-t overflow-hidden">
                    <p class="font-semibold px-3 py-4 text-red-500 italic">
                        ¿Seguro desea eliminar a esta escuela?
                    </p>
                </div>

                <form action="{{route('escuela.destroy',$escuela)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <!--footer-->
                    <div
                        class=" flex items-center justify-end p-2 border-t border-solid border-gray-200 rounded-b">
                        <a name="close-modal"
                        href="{{  route('escuela.show',$escuela) }}"
                        class=" mr-2 sm:mr-4 inline-flex justify-center py-2 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Cancelar
                        </a>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Eliminar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="opacity-40 fixed inset-0 z-50 bg-black"></div>
</div>

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
