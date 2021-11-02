@extends('plantillageneral.plantillageneral')

@section('titulo')
    Informes
@endsection

@section('content')

<div class="py-2">
    @include('components.alert-messages')
</div>



<div class="container mx-auto px-4 sm:px-8">

    <div class="py-8">

    <header class="grid grid-cols-12 gap-6 my-4 mx-2">

      <div class="col-span-6">
        <h2 class="text-2xl font-bold leading-tight">Informes</h2>
      </div>

    </header>

      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-8 overflow-x-auto">
        <div class="inline-block min-w-full  rounded-lg overflow-hidden">

            <div class="text-center text-gray-900 font-bold">Cantidad de Escuelas</div>
          <table class="min-w-full leading-normal">
            <thead>
              <tr>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                  Provincia
                </th>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                    Departamento
                </th>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                    Localidad
                </th>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                    Total
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($escuelasPorPosicion)>0)

                @foreach ($escuelasPorPosicion as $escuela )
                <tr>

                    <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->provincia}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->departamento}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->localidad}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$escuela->total}}
                            </p>
                          </div>
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



          <table class="min-w-full leading-normal mt-10 pt-10">
            <thead>
              <tr>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                  Cargo
                </th>

                <th class="px-5 py-3 border-2 border-gray-200 bg-gray-700 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                    Promedio
                </th>

               </tr>
            </thead>
            <tbody >

                @if(count($promedioDePersonasPorCargo)>0)

                @foreach ($promedioDePersonasPorCargo as $personasporcargo )
                <tr>

                    <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$personasporcargo->cargo}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-5 border border-gray-200 bg-white text-sm">
                        <div class="flex">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$personasporcargo->promedio}}
                            </p>
                          </div>
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
