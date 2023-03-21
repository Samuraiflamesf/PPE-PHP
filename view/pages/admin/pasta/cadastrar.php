<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['nome'])) {
    // Preparação da Inserção
    $sql = "INSERT INTO pasta (nome) VALUES (:nome)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $_POST['nome']);

    // Execução da Inserção
    $stmt->execute();
    header("Location: ../index.php?pag=pasta");
    exit;
}
?>