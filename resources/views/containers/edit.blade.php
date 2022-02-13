<form action={{route('update', $container->id)}} method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="tipo">Cliente</label>
        <input required type="text" id="tipo" name="cliente" value="{{$container->cliente}}">
    </div>
    <div>
        <label>Número do Container</label>
        <input pattern="[A-Za-z]{4}[0-9]{7}" required type="text" id="modelo" name="numero_container" value="{{$container->numero_container}}">
    </div>
    <div>
        <label>Tipo do Container</label>
        <select required name="tipo_container">
            <option value="20" {{$container->tipo_container == "20" ? 'selected' : ''}}>20</option>
            <option value="40" {{$container->tipo_container == "40" ? 'selected' : ''}}>40</option>
        </select>
    </div>
    <div>
        <label>Status do Container
            <select required name="status_container" >
                <option value="Cheio" {{$container->status_container == "Cheio" ? 'selected' : ''}}>Cheio</option>
                <option value="Vazio" {{$container->status_container == "Vazio" ? 'selected' : ''}}>Vazio</option>
            </select></label>
    </div>
    <div>
        <label>Categoria do Container
            <select required name="categoria_container">
                <option value="Importação" {{$container->categoria_container == "Importação" ? 'selected' : ''}}>Importação</option>
                <option value="Exportação" {{$container->categoria_container == "Exportação" ? 'selected' : ''}}>Exportação</option>
            </select></label>
    </div>


	<button type="submit">ok</button>

</form>
{{--    <div>--}}
{{--        <label>Tipo de Movimentação--}}
{{--            <select required name="tipo" value="">--}}
{{--                <option value="Embarque">Embarque</option>--}}
{{--                <option value="Descarga">Descarga</option>--}}
{{--                <option value="Gate in">Gate in</option>--}}
{{--                <option value="Gate out">Gate out</option>--}}
{{--                <option value="Reposicionamento">Reposicionamento</option>--}}
{{--                <option value="Pesagem">Pesagem</option>--}}
{{--                <option value="Scanner">Scanner</option>--}}
{{--            </select></label>--}}

{{--        <div>--}}
{{--            <label>Inicio <input type="datetime-local" name="entrada" value="{{$containerMovement->getDateStartAttribute($containerMovement->entrada)}}"></label>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label>Fim <input type="datetime-local" name="saida" value="{{$containerMovement->getDateStartAttribute($containerMovement->saida)}}"></label>--}}
{{--        </div>--}}
{{--    </div>--}}

