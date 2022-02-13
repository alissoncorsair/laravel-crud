<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-5 w-50">
    <form action={{route('store')}} method="post">
        @csrf

        <div>
            Nome do cliente<input required type="text" class="form-control my-2 bg-light text-black text-center"
                                  id="tipo" name="cliente">
        </div>

        <div>
            Número do container<input pattern="[A-Za-z]{4}[0-9]{7}"
                                      class="form-control my-2 bg-light text-black text-center" maxlength="11" required
                                      type="text" id="modelo" name="numero_container">
        </div>

        <div>
            Tipo do container<select required class="form-control my-2 bg-light text-black" name="tipo_container">
                <option selected disabled></option>
                <option value="20">20</option>
                <option value="40">40</option>
            </select>
        </div>

        <div>
            <label>Status do Container
                <select required class="form-control my-2 bg-light text-black text-center" name="status_container">
                    <option selected disabled></option>
                    <option value="Cheio">Cheio</option>
                    <option value="Vazio">Vazio</option>
                </select></label>
        </div>
        <div>
            <label>Categoria do Container
                <select class="form-control my-2 bg-light text-black text-center" required name="categoria_container">
                    <option selected disabled></option>
                    <option value="Importação">Importação</option>
                    <option value="Exportação">Exportação</option>
                </select></label>
        </div>


        <button type="submit" class="btn btn-dark">Confirmar alterações</button>

    </form>
</div>

