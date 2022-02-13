<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-5 w-50">
    <form action={{route('updatemove', [$idCliente, $idMovimento])}} method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Tipo de movimento
                <select class="form-control my-2 bg-light text-black text-center" required name="tipo">
                    <option value="Embarque" {{$movement->tipo == "Embarque" ? 'selected' : ''}}>Embarque</option>
                    <option value="Descarga" {{$movement->tipo == "Descarga" ? 'selected' : ''}}>Descarga</option>
                    <option value="Gate in" {{$movement->tipo == "Gate in" ? 'selected' : ''}}>Gate in</option>
                    <option value="Gate out" {{$movement->tipo == "Gate out" ? 'selected' : ''}}>Gate out</option>
                    <option value="Reposicionamento" {{$movement->tipo == "Reposicionamento" ? 'selected' : ''}}>
                        Reposicionamento
                    </option>
                    <option value="Pesagem" {{$movement->tipo == "Pesagem" ? 'selected' : ''}}>Pesagem</option>
                    <option value="Scanner" {{$movement->tipo == "Scanner" ? 'selected' : ''}}>Scanner</option>
                </select></label>
        </div>


        <div>

            <div>
                <label>Inicio <input class="form-control my-2 bg-light text-black text-center" type="datetime-local"
                                     name="entrada"
                                     value="{{$movement->getDateStartAttribute($movement->entrada) }}"></label>
            </div>
            <div>
                <label>Fim <input class="form-control my-2 bg-light text-black text-center" type="datetime-local"
                                  name="saida" value="{{$movement->getDateEndAttribute($movement->saida) }}"></label>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Confirmar alterações</button>

    </form>
</div>

