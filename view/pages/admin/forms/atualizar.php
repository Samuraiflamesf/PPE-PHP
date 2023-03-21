<head>
    <!-- Vendor -->
    <link href="../../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Styles Custom -->
    <link href="../../../../assets/css/style.css" rel="stylesheet">
</head>


<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['nome_arquivo'])) {
    // Preparação da Atualização
    $sql = "UPDATE pdf_files SET nome_arquivo = :nome_arquivo, selecione_pasta = :selecione_pasta WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome_arquivo", $_POST['nome_arquivo']);
    $stmt->bindValue(":selecione_pasta", $_POST['selecione_pasta']);
    $stmt->bindValue(":id", $_POST['id']);

    // Execução da Atualização
    $stmt->execute();

    // Redirecionamento para a página de listagem
    header("Location: ../index.php?pag=form");
    exit;
}

// Verificação de ID informado na URL
if (!isset($_GET['id'])) {
    header("Location: ../index.php?pag=form");
    exit;
}

// Preparação da Busca
$sql = "SELECT nome_arquivo, selecione_pasta FROM pdf_files WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_GET['id']);

// Execução da Busca
$stmt->execute();

// Resultado
$registro = $stmt->fetch();
if (!$registro) {
     header("Location: ../index.php?pag=form");
    exit;
}
?>

<!-- Formulário de Atualização -->
<div class="card col-5 m-auto mt-5 p-5">
    <div class="card-body">

        <form action="atualizar.php" method="post" class="">
            <!-- Campo ID (escondido) -->
            <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label for="nome" class="form-label">Nome dos Arquivos:</label>
                <input type="text" class="form-control" id="nome_arquivo" name="nome_arquivo" value="<?php echo $registro['nome_arquivo']; ?>">
            </div>
            <div class="form-group">
                <label for="selecione_pasta" class="p-2 px-0">
                    Selecione Pasta:
                </label>
                <select name="selecione_pasta" id="selecione_pasta" class="form-select">
                    <?php
                    // Conexão com o banco de dados
                    $conexao = mysqli_connect($servidor, $user, $password, $banco);
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
            <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
        </form>
    </div>
</div>