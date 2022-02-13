<form action={{route('storemove', $container->id)}} method="post">
    @csrf
    <div>
        <label>Tipo de movimento
            <select required name="tipo">
                <option selected disabled></option>
                <option value="Embarque">Embarque</option>
                <option value="Descarga">Descarga</option>
                <option value="Gate in">Gate in</option>
                <option value="Gate out">Gate out</option>
                <option value="Reposicionamento">Reposicionamento</option>
                <option value="Pesagem">Pesagem</option>
                <option value="Scanner">Scanner</option>
            </select></label>
    </div>
    <div>

        <div>
            <label>Inicio <input type="datetime-local" name="entrada"></label>
        </div>
        <div>
            <label>Fim <input type="datetime-local" name="saida"></label>
        </div>
    </div>
    <button type="submit">ok</button>
</form>
