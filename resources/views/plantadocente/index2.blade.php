@extends('plantillageneral.plantillageneral')

@section('titulo')
    Planta Docente
@endsection

@section('content')

<div class="py-2">
    @include('components.alert-messages')
</div>



<div class="container mx-auto px-4 sm:px-8">

    <div class="py-8">

    <header class="grid grid-cols-12 gap-6 my-4 mx-2">

      <div class="col-span-6">
        <h2 class="text-2xl font-bold leading-tight">Planta Docente</h2>
      </div>

        <div class="col-span-6 text-right">
        <a class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white font-medium cursor-pointer" id="toggleFilters"><i class="fas fa-plus"></i> AÑADIR</a>
      </div>

    </header>

      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">

          <table class="min-w-full leading-normal">
            <thead>
              <tr>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Docente
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Nivel
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Curso
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  División
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Materia
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Horas Mensuales
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Situación de Revista
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Acciones
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($docentesEscuelas)>0)

                @foreach ($docentesEscuelas as $docenteescuela)
                <tr>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($docenteescuela->docente->nombre)}}
                            </p>
                          </div>
                        </div>
                    </td>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                      <div class="flex">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{ucwords($docenteescuela->nivel->nombre)}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docenteescuela->curso}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($docenteescuela->division)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($docenteescuela->materia)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docenteescuela->horasMensuales ?? 'Sin Asignar'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docenteescuela->situacion_revista->nombre}}
                            </p>
                          </div>
                        </div>
                      </td>

                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex justify-center align-middle">

                            <a href="" title="Ver Planta" class="mr-5"><i class="fas fa-eye text-blue-500 fa-lg"></i></a>

                        </div>
                      </td>
                </tr>
                @endforeach

                @else
                        <caption style="caption-side: bottom" class="italic text-gray-500 py-8 text-center">
                            No se encontraron resultados!
                        </caption>

                @endif

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>






  {{-- FORMULARIO PARA CREAR NUEVA PLANTA DOCENTE --}}

  <div class="container mx-auto pb-8 shadow-lg rounded mt-5" id="formulario" style="display: none;" >


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
                            class="relative outline-none rounded py-1 px-2 w-full h-full bg-white shadow text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline disabled:opacity-50">
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
                    <a  id="cancelar"
                        class="sm:mr-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 cursor-pointer">
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


@endsection

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

        $("#toggleFilters").click(function () {
            $("#formulario").slideToggle("fast");
        });

        $('#cancelar').click(function(){
            $("#formulario").slideToggle("fast");
        })



    </script>

    @endsection
