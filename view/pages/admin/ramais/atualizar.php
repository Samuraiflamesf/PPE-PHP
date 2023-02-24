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
if (isset($_POST['setor']) && isset($_POST['telefone'])) {
    // Preparação da Atualização
    $sql = "UPDATE ramais SET setor = :setor, telefone = :telefone WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":setor", $_POST['setor']);
    $stmt->bindValue(":telefone", $_POST['telefone']);
    $stmt->bindValue(":id", $_POST['id']);

    // Execução da Atualização
    $stmt->execute();

    // Redirecionamento para a página de listagem
    header("Location: ../index.php?pag=ramais");
    exit;
}

// Verificação de ID informado na URL
if (!isset($_GET['id'])) {
    header("Location: ../index.php?pag=ramais");
    exit;
}

// Preparação da Busca
$sql = "SELECT setor, telefone FROM ramais WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_GET['id']);

// Execução da Busca
$stmt->execute();

// Resultado
$registro = $stmt->fetch();
if (!$registro) {
    header("Location: ../index.php?pag=ramais");
    exit;
}
?>

<!-- Formulário de Atualização -->
<div class="card col-5 m-auto mt-5 p-5">
    <div class="card-body">


        <form action="atualizar.php" method="post">
            <!-- Campo ID (escondido) -->
            <input class="form-control" type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label for="setor" class="form-label">Setor:</label>
                <input class="form-control" type="text" class="form-control" id="setor" name="setor" value="<?php echo $registro['setor']; ?>">
            </div>
            <div class="form-group">
                <label for="telefone" class="form-label">Telefone:</label>
                <input class="form-control" type="text" class="form-control" name="telefone" id="telefone" pattern="\d{4}\d{4}" value="<?php echo $registro['telefone']; ?>">
                <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
        </form>
    </div>
</div>