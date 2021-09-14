@extends('plantillageneral.plantillageneral')

@section('titulo')
    Orden Merito
@endsection

@section('content')

   @section('content')
    <div class="container mx-auto pb-8" id="app" >

        <div class="pt-2">
            @include('components.alert-messages')
        </div>

        <header class="grid my-4 mx-2 text-center">
            <h1 class="text-2xl text-gray-900 italic py-2">Subir Orden Merito</h1>
        </header>

        <div class="mt-5 md:mt-0 md:col-span-2">

            <form action="{{route('ordenmerito.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="shadow sm:rounded-md ">
                    <div class="px-2 pb-8 bg-white sm:p-6 rounded-t-md ">
                        <div class="grid grid-cols-12 gap-2 sm:gap-10">


                            <div class="md:col-span-6 col-span-12">
                                <label for="file" class="block text-sm font-medium text-gray-700 mb-2">Seleccionar archivo
                                    <strong>*</strong></label>
                                <input type="file" name="file" id="file" required
                                class="relative outline-none rounded  w-full h-7 bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('file')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="px-2 py-3 bg-gray-100 text-right sm:px-6 my-2 rounded-b-md">
                        <a href="{{route('docente.index')}}"
                            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            CANCELAR
                        </a>

                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            AGREGAR
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @stop
