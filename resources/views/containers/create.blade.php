<form action={{route('store')}} method="post">
    @csrf
    <div>
        <label for="tipo">Cliente</label>
        <input required type="text" id="tipo" name="cliente">
    </div>
    <div>
        <label>Número do Container</label>
        <input pattern="[A-Za-z]{4}[0-9]{7}" required type="text" id="modelo" name="numero_container">
    </div>
    <div>
        <label>Tipo do Container</label>
        <select required name="tipo_container">
            <option selected disabled></option>
            <option value="20">20</option>
            <option value="40">40</option>
        </select>
    </div>
    <div>
        <label>Status do Container
            <select required name="status_container">
                <option selected disabled></option>
                <option value="Cheio">Cheio</option>
                <option value="Vazio">Vazio</option>
            </select></label>
    </div>
    <div>
        <label>Categoria do Container
            <select required name="categoria_container">
                <option selected disabled></option>
                <option value="Importação">Importação</option>
                <option value="Exportação">Exportação</option>
            </select></label>
    </div>
    <button type="submit">ok</button>
</form>
