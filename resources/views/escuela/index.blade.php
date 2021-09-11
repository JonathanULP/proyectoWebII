@extends('plantillageneral.plantillageneral')


@section('titulo')
    Escuelas
@endsection

@section('content')

<div class="py-2">
    @include('components.alert-messages')
</div>


<div class="container mx-auto px-4 sm:px-8">

    <div class="py-8">

    <header class="grid grid-cols-12 gap-6 my-4 mx-2">
      <div class="col-span-6">
        <h2 class="text-2xl font-semibold leading-tight">Escuelas</h2>
      </div>

      <div class="col-span-6 text-right">
        <a class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white font-medium" href="{{route('escuela.create')}}"><i class="fas fa-plus"></i> Nueva Escuela</a>
      </div>
    </header>

      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">

          <table class="min-w-full leading-normal">
            <thead>
              <tr>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Nombre
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  CUE
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Direccion
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Teléfono
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Teléfono Interno
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Correo Electrónico
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Cantidad Alumnos Promedio
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Bilingüe
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Director
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Orientación
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Encargado
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Sector
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Tipo
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Nivel
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Ambito
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Categoria
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Tipo de Jornada
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Tipo de Secundario
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Localidad
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Acciones
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($escuelas)>0)

                @foreach ($escuelas as $escuela )
                <tr>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                      <div class="flex">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{$escuela->nombre}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->cue}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->direccion)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->telefono}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->telefonointerno}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->email}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->cantidadAlumnosPromedio}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->bilingue ? 'Si':'No'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->director)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->orientacion)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->user->name}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->sector->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->tipo->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->nivel->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->ambito->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->categoria->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->tipo_jornada->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-16">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $escuela->tipo_secundario->nombre ?? 'Sin Asignar' }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ucwords($escuela->localidad->nombre)}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">

                            <a href="{{route('escuela.show',$escuela)}}" title="Ver Escuela"><i class="fas fa-eye text-blue-500 fa-lg"></i></a>
                            <a href="{{route('escuela.edit',$escuela->id)}}" title="Editar Escuela"><i class="fas fa-pen text-yellow-500 fa-lg ml-4"></i></a>

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
          {{ $escuelas->links() }}
        </div>
      </div>
    </div>
  </div>



@endsection
