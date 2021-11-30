@extends('plantillageneral.plantillageneral')

@section('titulo')
    Orden Merito con Fallas
@endsection

@section('content')

<div class="py-2">
    @include('components.alert-messages')
</div>



<div class="container mx-auto px-4 sm:px-8">

    <div class="py-8">

    <header class="grid grid-cols-12 gap-6 my-4 mx-2">

      <div class="col-span-6">
        <h2 class="text-2xl font-bold leading-tight">Orden de Merito con Fallas</h2>
      </div>

    </header>

      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">

          <table class="min-w-full leading-normal">
            <thead>
              <tr>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Región
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Nivel
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Apellido
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                  Nombre
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">
                  Cuil
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Sexo
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Localidad
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Cargo o Espacio Curricular
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Titulo 1
                </th>

                <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Titulo 2
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Incumbencia
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Errores
                </th>

                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                 Acciones
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($ordenmeritosfailures)>0)

                @foreach ($ordenmeritosfailures as $ordenmerito )
                <tr>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                      <div class="flex">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            {{$ordenmerito->region ?? 'Sin region definida'}}
                          </p>
                        </div>
                      </div>
                    </td>
                    <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->nivel ?? 'Sin nivel definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->apellido ?? 'Sin apellido definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->nombre ?? 'Sin nombre definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-7">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->cuil ?? 'Sin cuil definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->sexo ?? 'Sin sexo definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->localidad ?? 'Sin localidad definida'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->cargo ?? 'Sin cargo definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->titulo1 ?? 'Sin titulo definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->titulo2 ?? 'Sin titulo definido'}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->incumbencia}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="flex items-center ml-5">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$ordenmerito->error}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex ml-5">

                            <a href="{{ route('ordenmeritofails.show',$ordenmerito->id) }}" title="Ver"><i class="fas fa-eye text-blue-600 fa-lg"></i></a>
                            <a href="{{ route('ordenmeritofails.edit',['ordenmeritofail'=>$ordenmerito]) }}" title="Editar"><i class="fas fa-pen text-yellow-500 fa-lg ml-4"></i></a>

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
          {{ $ordenmeritosfailures->links() }}
        </div>


      </div>
    </div>
  </div>


@endsection
