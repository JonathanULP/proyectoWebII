@extends('plantillageneral.plantillageneral')

@section('titulo')
    Escuelas
@endsection

@section('content')

   @section('content')
    <div class="container mx-auto pb-8" id="app" >

        <div class="pt-2">
            @include('components.alert-messages')
        </div>

        <header class="grid my-4 mx-2 text-center">
            <h1 class="text-2xl text-gray-900 italic py-2">Crear Nueva Escuela</h1>
        </header>

        <div class="mt-5 md:mt-0 md:col-span-2">

            <form action="{{route('escuela.store')}}" method="POST" autocomplete="off">
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
                                id="nombre"
                                title="Ingresar nombre de la escuela"
                                value="{{old('nombre')}}"
                                placeholder="Nombre de la escuela"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('nombre')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cue" class="block text-sm font-medium text-gray-700">CUE
                                    <strong>*</strong> </label>

                                <input type="text" name="cue" id="cue" maxlength="9" required
                                value="{{old('cue')}}"
                                placeholder="CUE"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('cue')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cuil" class="block text-sm font-medium text-gray-700">Dirección
                                    <strong>*</strong> </label>

                                <input type="text" name="direccion" id="direccion" maxlength="30" required
                                value="{{old('direccion')}}"
                                placeholder="Dirección"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('direccion')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Telefono
                                    <strong>*</strong></label>
                                <input type="text" name="telefono" id="telefono"  required
                                title="Ingresar telefono"
                                value="{{old('telefono')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('telefono')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="telefonointerno" class="block text-sm font-medium text-gray-700">Telefono Interno
                                    <strong>*</strong></label>
                                <input type="text" name="telefonointerno" id="telefonointerno" required
                                value="{{old('telefonointerno')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('telefonointerno')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electronico
                                    <strong>*</strong></label>
                                <input type="email" name="email" id="email" required
                                value="{{old('email')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('email')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="cantidadAlumnosPromedio" class="block text-sm font-medium text-gray-700">Cantidad de Alumnos
                                    <strong>*</strong></label>
                                <input type="number" name="cantidadAlumnosPromedio" id="cantidadAlumnosPromedio" required
                                value="{{old('cantidadAlumnosPromedio')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('cantidadAlumnosPromedio')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="md:col-span-6 col-span-12">
                                <label for="bilingue" class="block text-sm font-medium text-gray-700">Bilingue
                                    <strong>*</strong></label>
                                <select name="bilingue"
                                value="{{old('bilingue')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">

                                    <option value="1"> Si </option>
                                    <option value="0"> No </option>

                                </select>
                                @error('bilingue')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="md:col-span-6 col-span-12">
                                <label for="director" class="block text-sm font-medium text-gray-700">Director
                                    <strong>*</strong></label>
                                <input type="director" name="director" id="director" required
                                value="{{old('director')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('director')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="orientacion" class="block text-sm font-medium text-gray-700">Orientacion
                                    <strong>*</strong></label>
                                <input type="orientacion" name="orientacion" id="orientacion" required
                                value="{{old('orientacion')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @error('orientacion')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="md:col-span-6 col-span-12">
                                <label for="user" class="block text-sm font-medium text-gray-700">Encargado
                                    <strong>*</strong></label>
                                <select name="user_id"
                                value="{{old('user')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($user as $usuario)
                                    <option value="{{$usuario->id}}"> {{ucwords($usuario->name)}}</option>
                                @endforeach

                                </select>
                                @error('user_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="md:col-span-6 col-span-12">
                                <label for="sector" class="block text-sm font-medium text-gray-700">Sector
                                    <strong>*</strong></label>
                                <select name="sector_id"
                                value="{{old('sector')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($sectores as $sector)
                                    <option value="{{$sector->id}}"> {{ucwords($sector->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('sector_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo
                                    <strong>*</strong></label>
                                <select name="tipo_id"
                                value="{{old('tipo')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($tipos as $tipo)
                                    <option value="{{$tipo->id}}"> {{ucwords($tipo->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('tipo_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="md:col-span-6 col-span-12">
                                <label for="nivel" class="block text-sm font-medium text-gray-700"> Nivel
                                    <strong>*</strong></label>
                                <select name="nivel_id"
                                id="nivel"
                                value="{{old('nivel')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($niveles as $nivel)
                                    <option value="{{$nivel->id}}"> {{ ucwords($nivel->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('nivel_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="md:col-span-6 col-span-12">
                                <label for="user_id" class="block text-sm font-medium text-gray-700">Ambito
                                    <strong>*</strong></label>
                                <select name="ambito_id"
                                value="{{old('ambito')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($ambitos as $ambito)
                                    <option value="{{$ambito->id}}"> {{ucwords($ambito->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('ambito_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="tipo_jornada" class="block text-sm font-medium text-gray-700">Tipo de Jornada
                                    <strong>*</strong></label>
                                <select name="tipo_jornada_id"
                                value="{{old('tipo_jornada')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($t_jornada as $tj)
                                    <option value="{{$tj->id}}"> {{ucwords($tj->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('tipo_jornada_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="tipo_secundaria" class="block text-sm font-medium text-gray-700">Tipo de Secundaria
                                    <strong>*</strong></label>
                                <select name="tipo_secundaria_id"
                                id="tipo_secundaria"
                                value="{{old('tipo_secundaria')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($t_secundaria as $ts)
                                    <option value="{{$ts->id}}"> {{ucwords($ts->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('tipo_secundaria_id')
                                <span class=" text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>





                            <div class="md:col-span-6 col-span-12">
                                <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria
                                    <strong>*</strong></label>
                                <select name="categoria_id"
                                value="{{old('categoria')}}"
                                class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline">
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}"> {{ucwords($categoria->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('categoria_id')
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
                                    <option value="{{$localidad->id}}"> {{ucwords($localidad->nombre)}}</option>
                                @endforeach

                                </select>
                                @error('localidad_id')
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

    @section('js')

    <script>


        $('document').ready(function(){
            $('#tipo_secundaria').attr('disabled',true);
        });

        $('#nivel').change(function(){

            var valor = $('#nivel').val();

            if(valor !== '3'){
                $('#tipo_secundaria').attr('disabled',true);
            }
            else{
                $('#tipo_secundaria').attr('disabled',false);
            }

        });

    </script>

    @endsection
