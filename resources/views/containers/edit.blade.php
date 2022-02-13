<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-5 w-50">
    <form action={{route('update', $container->id)}} method="post">
        @csrf
        @method('PUT')

        <div>
            Nome do cliente<input required type="text" class="form-control my-2 bg-light text-black text-center"
                                  id="tipo" name="cliente" value="{{$container->cliente}}">
        </div>

        <div>
            Número do container<input pattern="[A-Za-z]{4}[0-9]{7}"
                                      class="form-control my-2 bg-light text-black text-center" maxlength="11" required
                                      type="text" id="modelo" name="numero_container" placeholder="Número do Container"
                                      value="{{$container->numero_container}}">
        </div>

        <div>
            Tipo do container<select required placeholder="Tipo do Container"
                                     class="form-control my-2 bg-light text-black" name="tipo_container">
                <option value="20" {{$container->tipo_container == "20" ? 'selected' : ''}}>20</option>
                <option value="40" {{$container->tipo_container == "40" ? 'selected' : ''}}>40</option>
            </select>
        </div>

        <div>
            <label>Status do Container
                <select required class="form-control my-2 bg-light text-black text-center" name="status_container">
                    <option value="Cheio" {{$container->status_container == "Cheio" ? 'selected' : ''}}>Cheio</option>
                    <option value="Vazio" {{$container->status_container == "Vazio" ? 'selected' : ''}}>Vazio</option>
                </select></label>
        </div>
        <div>
            <label>Categoria do Container
                <select class="form-control my-2 bg-light text-black text-center" required name="categoria_container">
                    <option value="Importação" {{$container->categoria_container == "Importação" ? 'selected' : ''}}>
                        Importação
                    </option>
                    <option value="Exportação" {{$container->categoria_container == "Exportação" ? 'selected' : ''}}>
                        Exportação
                    </option>
                </select></label>
        </div>


        <button type="submit" class="btn btn-dark">Confirmar alterações</button>

    </form>
</div>
