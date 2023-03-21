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
if (isset($_POST['nome']) && isset($_POST['link'])) {
    // Preparação da Atualização
    $sql = "UPDATE links SET nome = :nome, link = :link WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $_POST['nome']);
    $stmt->bindValue(":link", $_POST['link']);
    $stmt->bindValue(":id", $_POST['id']);

    // Execução da Atualização
    $stmt->execute();

    // Redirecionamento para a página de listagem
    header("Location: ../index.php?pag=links");
    exit;
}

// Verificação de ID informado na URL
if (!isset($_GET['id'])) {
    header("Location: ../index.php?pag=links");
    exit;
}

// Preparação da Busca
$sql = "SELECT nome, link FROM links WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_GET['id']);

// Execução da Busca
$stmt->execute();

// Resultado
$registro = $stmt->fetch();
if (!$registro) {
    header("Location: ../index.php?pag=links");
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
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $registro['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="data_nascimento" class="p-2 px-0">
                    Link:
                </label>
                <input type="text" class="form-control" id="link" name="link" value="<?php echo $registro['link']; ?>" required>

            </div>
            <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
        </form>
    </div>
</div>