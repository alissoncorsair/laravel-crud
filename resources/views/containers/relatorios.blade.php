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
                        <h2>Relatório das movimentações dos containers</h2>
                    </div>
                </div>
            </div>
            <a href="{{route('index')}}">Voltar para a página inicial</a>
            <table class="table table-striped table-hover">
                @php($import = 0)
                @php($export = 0)
                @foreach ($containers as $container)
                    <tr>
                        <th>N°</th>
                        <th>Cliente</th>
                        <th>Número contêiner</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Categoria</th>
                        <th>Movimentos realizados</th>
                    </tr>
                    <tr>
                        <td>{{ $container->id }}</td>
                        <td><b>{{ $container->cliente }}</b></td>
                        <td>{{ $container->numero_container }}</td>
                        <td>{{ $container->tipo_container }}</td>
                        <td>{{ $container->status_container }}</td>
                        <td>{{ $container->categoria_container }}</td>
                        <td style="text-align:center">{{$container->qtd_movimentos >= 1 ? $container->qtd_movimentos : 0}}</td>
                    </tr>

                    @php ($check = 0)
                    @foreach($movements as $movement)
                        @if($movement->container_id === $container->id && $check === 0)
                            <tr style="background-color: grey">
                                <th>Tipo de movimento</th>
                                <th>Inicio</th>
                                <th>Saida</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                @php ($check++)
                            </tr>
                        @endif
                    @endforeach()
                    @foreach($movements as $movement)
                        @if($container->categoria_container === "Exportação" && $movement->container_id === $container->id)
                            @php($export++)
                        @elseif($container->categoria_container === "Importação" && $movement->container_id === $container->id)
                            @php($import++)
                        @endif
                        @if($movement->container_id === $container->id)
                            <tr>
                                <td>{{$movement->tipo}}</td>
                                <td>{{$movement->entrada}}</td>
                                <td>{{$movement->saida}}</td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @endforeach
                    </tbody>
            </table>

                    <h1 style="font-size: 30px; margin-bottom: 10px;">Total de importações realizadas: {{$import}}</h1>
                    <h1 style="font-size: 30px">Total de exportações realizadas: {{$export}}</h1>



        </div>
    </div>
</div>
</body>

</html>

