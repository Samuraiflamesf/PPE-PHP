<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['nome']) && isset($_POST['data_nascimento'])) {
    // Preparação da Atualização
    $sql = "UPDATE aniversariantes SET nome = :nome, data_nascimento = :data_nascimento WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $_POST['nome']);
    $stmt->bindValue(":data_nascimento", $_POST['data_nascimento']);
    $stmt->bindValue(":id", $_POST['id']);

    // Execução da Atualização
    $stmt->execute();

    // Redirecionamento para a página de listagem
    header("Location: ../index.php?pag=aniversario");
    exit;
}

// Verificação de ID informado na URL
if (!isset($_GET['id'])) {
    header("Location: ../index.php?pag=aniversario");
    exit;
}

// Preparação da Busca
$sql = "SELECT nome, data_nascimento FROM aniversariantes WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_GET['id']);

// Execução da Busca
$stmt->execute();

// Resultado
$registro = $stmt->fetch();
if (!$registro) {
    header("Location: ../index.php?pag=aniversario");
    exit;
}
?>

<!-- Formulário de Atualização -->

<form action="atualizar.php" method="post">
    <!-- Campo ID (escondido) -->
    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $registro['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="<?php echo $registro['data_nascimento']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
