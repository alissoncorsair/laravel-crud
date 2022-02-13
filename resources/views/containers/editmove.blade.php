<form action={{route('updatemove', [$idCliente, $idMovimento])}} method="post">
    @csrf
    @method('PUT')
    <div>
        <label>Tipo de movimento
            <select required name="tipo">
                <option value="Embarque" {{$movement->tipo == "Embarque" ? 'selected' : ''}}>Embarque</option>
                <option value="Descarga" {{$movement->tipo == "Descarga" ? 'selected' : ''}}>Descarga</option>
                <option value="Gate in" {{$movement->tipo == "Gate in" ? 'selected' : ''}}>Gate in</option>
                <option value="Gate out" {{$movement->tipo == "Gate out" ? 'selected' : ''}}>Gate out</option>
                <option value="Reposicionamento" {{$movement->tipo == "Reposicionamento" ? 'selected' : ''}}>Reposicionamento</option>
                <option value="Pesagem" {{$movement->tipo == "Pesagem" ? 'selected' : ''}}>Pesagem</option>
                <option value="Scanner" {{$movement->tipo == "Scanner" ? 'selected' : ''}}>Scanner</option>
            </select></label>
    </div>
    <div>

        <div>
            <label>Inicio <input type="datetime-local" name="entrada" value="{{$movement->getDateStartAttribute($movement->entrada) }}"></label>
        </div>
        <div>
            <label>Fim <input type="datetime-local" name="saida" value="{{$movement->getDateEndAttribute($movement->saida) }}"></label>
        </div>
    </div>
    <button type="submit">ok</button>
</form>
