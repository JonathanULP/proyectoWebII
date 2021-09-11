@extends('plantillageneral.plantillageneral')

@section('titulo')
    Planta Docente
@endsection

@section('content')

   @section('content')
    <div class="container mx-auto pb-8" id="app" >

        <div class="pt-2">
            @include('components.alert-messages')
        </div>

        <header class="grid my-4 mx-2 text-center">
            <h1 class="text-2xl text-gray-900 italic py-2"> Nueva Planta Docente</h1>
        </header>

        <div class="mt-5 md:mt-0 md:col-span-2">

            <form action="{{route('plantadocente.store')}}" method="POST">
                @csrf
                @method('post')

                <div class="shadow sm:rounded-md ">
                    <div class="px-2 pb-8 bg-white sm:p-6 rounded-t-md ">
                        <div class="grid grid-cols-12 gap-2 sm:gap-10">

                            <div class="col-span-12 mt-6 sm:mt-0">
                                <p class="block text-sm font-medium text-gray-700 italic">(*) Campos de caracter obligatorio</p>
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="nivel" class="block text-sm font-medium text-gray-700">Nivel
                                    <strong>*</strong></label>
                                <select name="nivel_id"
                                id="nivel"
                                value="{{old('nivel')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($niveles as $nivel)
                                    <option value="{{$nivel->id}}"> {{ ucwords($nivel->nombre) }}</option>
                                @endforeach

                                </select>
                                @error('nivel')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="curso" class="block text-sm font-medium text-gray-700">Curso
                                    <strong>*</strong> </label>

                                    <select name="curso"
                                    value="{{old('curso')}}"
                                    class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">

                                     <option value="1"> 1 </option>
                                     <option value="2"> 2 </option>
                                     <option value="3"> 3 </option>
                                     <option value="4"> 4 </option>
                                     <option value="5"> 5 </option>
                                     <option value="6"> 6 </option>
                                     <option value="7"> 7 </option>

                                    </select>
                                    @error('curso')
                                    <span class=" text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="division" class="block text-sm font-medium text-gray-700">División
                                    <strong>*</strong></label>
                                <select name="division"
                                value="{{old('division')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">

                                <option value="A"> A </option>
                                <option value="B"> B </option>
                                <option value="C"> C </option>
                                <option value="D"> D </option>
                                <option value="E"> E </option>

                                </select>
                                @error('division')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="materia" class="block text-sm font-medium text-gray-700">Materia
                                    <strong>*</strong></label>
                                <input type="text" name="materia" id="materia" required
                                title="Ingresar materia"
                                value="{{old('materia')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('materia')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="horasMensuales" class="block text-sm font-medium text-gray-700">Horas Mensuales
                                    <strong>*</strong></label>
                                <input type="number" name="horasMensuales" id="horasMensuales" required
                                value="{{old('horasMensuales')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('horasMensuales')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="situacion_revista" class="block text-sm font-medium text-gray-700">Situacion de Revista
                                    <strong>*</strong></label>
                                <select name="situacion_revista_id"
                                value="{{old('situacion_revista_id')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($situaciones as $situacion)
                                    <option value="{{$situacion->id}}"> {{$situacion->nombre}}</option>
                                @endforeach

                                </select>
                                @error('situacion_revista_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="docente" class="block text-sm font-medium text-gray-700">Docente
                                    <strong>*</strong></label>
                                <select name="docente_id"
                                value="{{old('docente_id')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($docentes as $docente)
                                    <option value="{{$docente->id}}"> {{$docente->nombre}}</option>
                                @endforeach

                                </select>
                                @error('docente_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="hidden" name="escuela_id" value="{{ $escuela }}">

                        </div>
                    </div>

                    <div class="px-2 py-3 bg-gray-100 text-right sm:px-6 my-2 rounded-b-md">
                        <a href="{{ url()->previous() }}"
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

    @section('js')

    <script>


        $('document').ready(function(){
            $('#horasMensuales').attr('disabled',true);
        });

        $('#nivel').change(function(){

            var valor = $('#nivel').val();

            if(valor !== '3'){
                $('#horasMensuales').attr('disabled',true);
            }
            else{
                $('#horasMensuales').attr('disabled',false);
            }

        });

    </script>

    @endsection
