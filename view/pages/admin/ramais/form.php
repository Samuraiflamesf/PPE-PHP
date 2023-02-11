<form action="ramais/cadastrar.php" method="post">
    <!-- Nome -->
    <div class="form-group">
        <label for="nome" class="p-2 px-0">
            Nome do Setor:
        </label>
        <input type="text" class="form-control" id="setor" name="setor" required>
    </div>
    <!-- Data de Nascimento -->
    <div class="form-group">
        <label for="telefone" class="p-2 px-0">
            Telefone:
        </label>
        <input type="text" class="form-control" name="telefone" id="telefone" pattern="\d{4}\d{4}">

    </div>
    <!-- Botão de Envio -->
    <button type="submit" class="btn btn-primary p-2 m-3 mx-0">
        Cadastrar
    </button>
</form>