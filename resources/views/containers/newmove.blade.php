<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-5 w-50">
    <form action={{route('storemove', $container->id)}} method="post">
        @csrf
        <div>
            <label>Tipo de movimento
                <select class="form-control my-2 bg-light text-black text-center" required name="tipo">
                    <option selected disabled></option>
                    <option value="Embarque">Embarque</option>
                    <option value="Descarga">Descarga</option>
                    <option value="Gate in">Gate in</option>
                    <option value="Gate out">Gate out</option>
                    <option value="Reposicionamento">
                        Reposicionamento
                    </option>
                    <option value="Pesagem">Pesagem</option>
                    <option value="Scanner">Scanner</option>
                </select></label>
        </div>

        <div>

            <div>
                <label>Inicio <input class="form-control my-2 bg-light text-black text-center" type="datetime-local"
                                     name="entrada"></label>
            </div>
            <div>
                <label>Fim <input class="form-control my-2 bg-light text-black text-center" type="datetime-local"
                                  name="saida"></label>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Confirmar alterações</button>


    </form>
