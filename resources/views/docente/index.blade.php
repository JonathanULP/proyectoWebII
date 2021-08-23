@extends('plantillageneral.plantillageneral')

@section('titulo')
    Profesores
@endsection

@section('content')

<div class="py-2">
    @include('components.alert-messages')
</div>



<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
      <div>
        <h2 class="text-2xl font-semibold leading-tight">Profesores</h2>
      </div>
      <div class="text-right">
        <a class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" href="{{route('docente.create')}}"><i class="fas fa-plus"></i> Nuevo Profesor</a>
      </div>


      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">

          <table class="min-w-full leading-normal">
            <thead>
              <tr>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Nombre
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Apellido
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Cuil
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Titulo
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Categoria Titulo
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Localidad
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Accciones
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($docentes)>0)

                @foreach ($docentes as $docente )
                <tr>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                      <div class="flex">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{$docente->nombre}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docente->apellido}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docente->cuil}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docente->titulo}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docente->categoriaTitulo}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$docente->localidad->nombre}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">

                            <a href="{{route('docente.show',$docente)}}" title="Ver Profesor"><i class="fas fa-eye text-blue-500 fa-lg"></i></a>
                            <a href="{{route('docente.edit',$docente->id)}}" title="Editar Profesor"><i class="fas fa-pen text-yellow-500 fa-lg ml-4"></i></a>

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


@endsection
