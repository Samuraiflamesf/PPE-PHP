<form action="forms/processa_upload.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <div class="alert m-0 alert-primary text-center">
        <i class="fa-solid fa-circle-exclamation mx-2 "></i>
        <strong>
            Em "Selecione Tipo do arquivo" marque de acordo com tipo, por padrão será PDF
        </strong>
    </div>
    <!-- Nome -->
    <div class="form-group">
        <label for="nome_arquivo" class="p-2 px-0">
            Novo nome do arquivo:
        </label>
        <input type="text" name="nome_arquivo" id="nome_arquivo" class="form-control">
    </div>
    <!-- Tipo -->
    <div class="form-group">
        <label for="selecione_tipo" class="p-2 px-0">
            Selecione Tipo do arquivo:
        </label>
        <select name="selecione_tipo" id="selecione_tipo" class="form-select">
            <option value='1'>PDF</option>
            <option value='2'>Word</option>
            <option value='3'>Excel</option>
        </select>
        <!-- Pasta -->
        <div class="form-group">
            <label for="selecione_pasta" class="p-2 px-0">
                Selecione Pasta:
            </label>
            <select name="selecione_pasta" id="selecione_pasta" class="form-select">
                <?php
                // Conexão com o banco de dados
                $conexao = mysqli_connect($servidor, $user, $password, $banco);
                $conexao-> set_charset("utf8");
                if (!$conexao) {
                    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                }
                // Query para selecionar todas as pastas
                $query = "SELECT id, nome FROM pasta";
                $resultado = mysqli_query($conexao, $query);
                // Verifica se houve resultados
                if (mysqli_num_rows($resultado) > 0) {
                    // Loop para mostrar todas as pastas
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                    }
                }
                // Fecha a conexão com o banco de dados
                mysqli_close($conexao);
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="pdf_file" class="p-2 px-0">
                Selecione o arquivo:
            </label>
            <input type="file" name="selecione_pdf" id="selecione_pdf" class="form-control">
        </div>

        <!-- Botão de Envio -->
        <input type="submit" class="btn btn-primary p-2 m-3 mx-0" value="Enviar">
</form>