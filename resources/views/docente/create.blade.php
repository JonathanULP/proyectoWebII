@extends('plantillageneral.plantillageneral')

@section('titulo')
    Profesores
@endsection

@section('content')

   @section('content')
    <div class="container mx-auto pb-8" id="app" >

        <div class="pt-2">
            @include('components.alert-messages')
        </div>

        <header class="grid my-4 mx-2 text-center">
            <h1 class="text-2xl text-gray-900 italic py-2">Crear Nuevo Profesor</h1>
        </header>

        <div class="mt-5 md:mt-0 md:col-span-2">

            <form action="{{route('docente.store')}}" method="POST" autocomplete="off">
                @csrf
                @method('post')

                <div class="shadow sm:rounded-md ">
                    <div class="px-2 pb-8 bg-white sm:p-6 rounded-t-md ">
                        <div class="grid grid-cols-12 gap-2 sm:gap-10">

                            <div class="col-span-12 mt-6 sm:mt-0">
                                <p class="block text-sm font-medium text-gray-700 italic">(*) Campos de caracter obligatorio</p>
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre
                                    <strong>*</strong></label>
                                <input type="text" name="nombre" id="nombre" minlength="3" maxlength="30" required
                                title="Ingresar nombre"
                                value="{{old('nombre')}}"
                                placeholder="Nombre del profesor"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('nombre')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido
                                    <strong>*</strong> </label>

                                <input type="text" name="apellido" id="apellido" maxlength="30" required
                                value="{{old('apellido')}}"
                                placeholder="Apellido del profesor"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('apellido')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cuil" class="block text-sm font-medium text-gray-700">CUIL/CUIT
                                    <strong>*</strong> </label>

                                <input type="text" name="cuil" id="cuil" maxlength="11" required
                                value="{{old('cuil')}}"
                                placeholder="Apellido del profesor"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('cuil')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="titulo" class="block text-sm font-medium text-gray-700">Titulo
                                    <strong>*</strong></label>
                                <input type="text" name="titulo" id="titulo"  required
                                title="Ingresar titulo del profesor"
                                value="{{old('titulo')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('titulo')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="categoriaTitulo" class="block text-sm font-medium text-gray-700">Categoria del Titulo
                                    <strong>*</strong></label>
                                <input type="text" name="categoriaTitulo" id="categoriaTitulo" required
                                value="{{old('categoriaTitulo')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('categoriaTitulo')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="localidad" class="block text-sm font-medium text-gray-700">Localidad
                                    <strong>*</strong></label>
                                <select name="localidad_id"
                                value="{{old('localidad')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($localidades as $localidad)
                                    <option value="{{$localidad->id}}"> {{$localidad->nombre}}</option>
                                @endforeach

                                </select>
                                @error('localidad')
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
