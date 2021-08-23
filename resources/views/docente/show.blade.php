@extends('plantillageneral.plantillageneral')

@section('titulo')
    Profesores
@endsection

@section('content')


<div class="bg-white w-full rounded-lg shadow-xl">

    <div class="md:grid md:grid-cols-2 hover:text-blue-900 md:space-y-0 space-y-1 py-7 border-b rounded ml-8 pl-8">
        <h2 class="text-2xl">
            Profesor: {{ $docente->nombre}} {{$docente->apellido}}
        </h2>
    </div>

    <div>
        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                CUIL/CUIT
            </p>
            <p>
                {{ $docente->cuil}}
                {{-- $reclamo->created_at->format('d-m-Y  h:i') . 'hs' --}}
            </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                TITULO
            </p>
            <p>
                {{ $docente->titulo}}
            </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                CATEGORIA TITULO
            </p>
            <p>
                 {{ $docente->categoriaTitulo}}
            </p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-blue-100 md:space-y-0 space-y-1 p-4 border-b rounded">
            <p class="text-gray-600">
                LOCALIDAD
            </p>
            <p>
                {{ $docente->localidad->nombre }}
            </p>
        </div>

    </div>

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <a href="{{ route('docente.index') }}"
            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Regresar
        </a>


        <button class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
             onclick="toggleModal()" title="Eliminar">Eliminar
        </button>

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
                        ¿Seguro desea eliminar a este profesor?
                    </p>
                </div>

                <form action="{{route('docente.destroy',$docente)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <!--footer-->
                    <div
                        class=" flex items-center justify-end p-2 border-t border-solid border-gray-200 rounded-b">
                        <button  name="close-modal"
                            class=" mr-2 sm:mr-4 inline-flex justify-center py-2 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Cancelar
                        </button>
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
