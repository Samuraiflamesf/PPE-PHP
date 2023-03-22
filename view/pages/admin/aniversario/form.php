<form action="aniversario/cadastrar.php" method="post" accept-charset="utf-8">
    <!-- Nome -->
    <div class="form-group">
        <label for="nome" class="p-2 px-0">
            Nome do Servidor:
        </label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <!-- Data de Nascimento -->
    <div class="form-group">
        <label for="data_nascimento" class="p-2 px-0">
            Data de Nascimento:
        </label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
    </div>
    <!-- Botão de Envio -->
    <button type="submit" class="btn btn-primary p-2 m-3 mx-0">
        Cadastrar
    </button>
</form>