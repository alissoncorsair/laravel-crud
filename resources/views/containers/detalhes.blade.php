{{--@foreach($containerMovements as $movement)--}}

{{--    <h1>{{$movement->container_id}}</h1>--}}
{{--    <h1>{{$movement->tipo}}</h1>--}}
{{--    <h1>{{$movement->entrada}}</h1>--}}
{{--    <h1>{{$movement->saida}}</h1>--}}

{{--@endforeach--}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Detalhes do cliente <b>{{$container->cliente}}</b>.</h2>
                        <h2>Container: {{$container->numero_container}}.</h2>
                        <p>Tipo: {{$container->tipo_container}}, Status: {{$container->status_container}}, Categoria: {{$container->categoria_container}}</p>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
{{--                    <th>N°</th>--}}
{{--                    <th>Cliente</th>--}}
{{--                    <th>Número do contêiner</th>--}}
{{--                    <th>Tipo</th>--}}
{{--                    <th>Status</th>--}}
{{--                    <th>Categoria</th>--}}
{{--                    <th>Movimentos realizados</th>--}}
                    <th>Tipo de movimento</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th></th>
                    <th>Ações</th>
                </tr>
                @php
                    $contador = 0;
                @endphp
                @foreach($containerMovements as $movement)
                    <tr>
                        <td>{{ $movement->tipo }}</td>
                        <td>{{ \Carbon\Carbon::parse($movement->entrada)->format('d/m/Y H:m:s')}}</td>
                        <td>{{ \Carbon\Carbon::parse($movement->saida)->format('d/m/Y H:m:s')}}</td>
                        <td></td>
{{--                        <td style="text-align:center">{{$container->qtd_movimentos >= 1 ? $container->qtd_movimentos : 0}}</td>--}}
{{--                        <td class="">--}}
                        <td>
                            <a href="{{ route('editmove', [$container->id, $movement->id]) }}">
                                <button
                                    class="h-8 px-1 m-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold border border-blue-700 rounded">
                                    Editar
                                </button>
                            </a>
                            <form method="POST"
                                  action={{ route('destroymove', [$container->id, $movement->id]) }} id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="h-8 px-1 m-2 bg-red-400 hover:bg-red-800 text-white font-bold border border-blue-700 rounded">
                                    Apagar
                                </button>
                            </form>
                        </td>
{{--                            <a href="{{route('createmove', $container->id)}}"><button--}}
{{--                                    class="h-8 px-1 m-2 bg-green-400 hover:bg-green-800 text-white font-bold border border-blue-700 rounded">--}}
{{--                                    Mover--}}
{{--                                </button></a>--}}

{{--                        </td>--}}
                        @php
                            $contador++;
                        @endphp
                    </tr>
                @endforeach
                </tbody>
            </table>
                <h1><b>Quantidade de movimentos: {{$contador}}</b></h1>
                <a href="{{ route('index') }}"><h1>Voltar</h1></a>
{{--            <div class="col-sm-6">--}}
{{--                <a href={{route('create')}} class="btn btn-success" data-toggle="modal"><span>Adicionar--}}
{{--                            Container</span></a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
</body>

</html>
