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
                        <h2>Sistema de Gerenciamento</h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>Cliente</th>
                    <th>Número do contêiner</th>
                    <th>Tipo</th>
                    <th>Status</th>
                    <th>Categoria</th>
                    <th>Movimentos realizados</th>
                    <th>Ações</th>
                </tr>
                @foreach ($containers as $container)
                    <tr>
                        <td>{{ $container->id }}</td>
                        <td>{{ $container->cliente }}</td>
                        <td>{{ $container->numero_container }}</td>
                        <td>{{ $container->tipo_container }}</td>
                        <td>{{ $container->status_container }}</td>
                        <td>{{ $container->categoria_container }}</td>
                        <td style="text-align:center">{{$container->qtd_movimentos >= 1 ? $container->qtd_movimentos : 0}}</td>
                        <td class="">

                            <a href={{route('edit', $container->id)}}>
                                <button
                                    class="h-8 px-1 m-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold border border-blue-700 rounded">
                                    Editar
                                </button>
                            </a>
                            <a href="{{route('relatorio', $container->id)}}"><button
                                class="h-8 px-1 m-2 bg-blue-400 hover:bg-blue-800 text-white font-bold border border-blue-700 rounded">
                                Detalhes
                            </button></a>

                            <form method="POST"
                                  action={{ route('destroy', $container->id) }} id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="h-8 px-1 m-2 bg-red-400 hover:bg-red-800 text-white font-bold border border-blue-700 rounded">
                                    Apagar
                                </button>
                            </form>
                            <a href="{{route('createmove', $container->id)}}"><button
                                class="h-8 px-1 m-2 bg-green-400 hover:bg-green-800 text-white font-bold border border-blue-700 rounded">
                                Mover
                            </button></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-sm-6">
                <a href="{{route('create')}}" class="btn btn-success" data-toggle="modal"><span>Adicionar
                            Container</span></a>
                <a href="{{route('relatorios')}}" class="btn btn-success bg-red-400 hover:bg-red-800" data-toggle="modal"><span>Gerar relatório</span></a>
            </div>

        </div>
    </div>
</div>
</body>

</html>
