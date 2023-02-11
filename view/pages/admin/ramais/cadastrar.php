<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['setor']) && isset($_POST['telefone'])) {
    // Preparação da Inserção
    $sql = "INSERT INTO ramais (setor, telefone) VALUES (:setor, :telefone)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":setor", $_POST['setor']);
    $stmt->bindValue(":telefone", $_POST['telefone']);

    // Execução da Inserção
    $stmt->execute();
    header("Location: ../index.php?pag=ramais");
    exit;
}
