@extends('plantillageneral.plantillageneral')

@section('apellido')
    Profesores
@endsection

@section('content')

   @section('content')
    <div class="container mx-auto pb-8" id="app" >

        <div class="pt-2">
            @include('components.alert-messages')
        </div>

        <header class="grid my-4 mx-2 text-center">
            <h1 class="text-2xl text-gray-900 italic py-2">Corregir Orden de Merito</h1>
        </header>

        <div class="mt-5 md:mt-0 md:col-span-2">

            <form action="{{ route('ordenmeritofails.update',['ordenmeritofail'=>$orden]) }}" method="POST" autocomplete="off">
                @csrf
                @method('PUT')

                <div class="shadow sm:rounded-md ">
                    <div class="px-2 pb-8 bg-white sm:p-6 rounded-t-md ">
                        <div class="grid grid-cols-12 gap-2 sm:gap-10">

                            <div class="col-span-12 mt-6 sm:mt-0">
                                <p class="block text-sm font-medium text-gray-700 italic">(*) Campos de caracter obligatorio</p>
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="region" class="block text-sm font-medium text-gray-700">Región
                                    <strong>*</strong></label>
                                <input type="text" name="region" id="region" minlength="3" maxlength="30" required
                                title="Ingresar region"
                                value="{{ old('region') ?? ($orden->region ? $orden->region : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('region')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="nivel" class="block text-sm font-medium text-gray-700">Nivel
                                    <strong>*</strong> </label>

                                <input type="text" name="nivel" id="nivel" maxlength="30" required
                                value="{{old('nivel') ?? ($orden->nivel ? $orden->nivel : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('nivel')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido
                                    <strong>*</strong> </label>

                                <input type="text" name="apellido" id="apellido" maxlength="30" required
                                value="{{old('apellido') ?? ($orden->apellido? $orden->apellido : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('apellido')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre
                                    <strong>*</strong></label>
                                <input type="text" name="nombre" id="nombre"  required
                                value="{{old('nombre') ?? ($orden->nombre ? $orden->nombre : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('nombre')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cuil" class="block text-sm font-medium text-gray-700">Cuil
                                    <strong>*</strong></label>
                                <input type="text" name="cuil" id="cuil" required maxlength="11"
                                value="{{old('cuil') ?? ($orden->cuil ? $orden->cuil : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('cuil')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo
                                    <strong>*</strong></label>
                                <input type="text" name="sexo" id="sexo" required
                                value="{{old('sexo') ?? ($orden->sexo ? $orden->sexo : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('sexo')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="localidad" class="block text-sm font-medium text-gray-700">Localidad
                                    <strong>*</strong></label>
                                <input type="text" name="localidad" id="localidad" required
                                value="{{old('localidad') ?? ($orden->localidad ? $orden->localidad : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('localidad')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="localidad" class="block text-sm font-medium text-gray-700">Localidad
                                    <strong>*</strong></label>
                                <input type="text" name="localidad" id="localidad" required
                                value="{{old('localidad') ?? ($orden->localidad ? $orden->localidad : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('localidad')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo
                                    <strong>*</strong></label>
                                <input type="text" name="cargo" id="cargo" required
                                value="{{old('cargo') ?? ($orden->cargo ? $orden->cargo : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('cargo')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="titulo1" class="block text-sm font-medium text-gray-700">Titulo 1
                                    <strong>*</strong></label>
                                <input type="text" name="titulo1" id="titulo1" required
                                value="{{old('titulo1') ?? ($orden->titulo1 ? $orden->titulo1 : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('titulo1')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="titulo2" class="block text-sm font-medium text-gray-700">Titulo 2
                                    <strong>*</strong></label>
                                <input type="text" name="titulo2" id="titulo2"
                                value="{{old('titulo2') ?? ($orden->titulo2 ? $orden->titulo2 : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('titulo2')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="incumbencia" class="block text-sm font-medium text-gray-700">Incumbencia
                                    <strong>*</strong></label>
                                <input type="text" name="incumbencia" id="incumbencia" required
                                value="{{old('incumbencia') ?? ($orden->incumbencia ? $orden->incumbencia : '')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('incumbencia')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="px-2 py-3 bg-gray-100 text-right sm:px-6 my-2 rounded-b-md">
                        <a href=""
                            class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            CANCELAR
                        </a>

                        <button type="submit"
                        title="Esta acción editara el dato actual y la guardara en junto con los datos que se han subio correctamente"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            EDITAR Y CONFIRMAR
                        </button>
                    </div>
                </div>

            </form>

            <dropdown></dropdown>
        </div>
    </div>
    @stop
