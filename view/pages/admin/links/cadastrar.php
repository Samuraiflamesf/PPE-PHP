<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['nome']) && isset($_POST['link'])) {
    // Preparação da Inserção
    $sql = "INSERT INTO links (nome, link) VALUES (:nome, :link)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $_POST['nome']);
    $stmt->bindValue(":link", $_POST['link']);

    // Execução da Inserção
    $stmt->execute();
    header("Location: ../index.php?pag=links");
    exit;
}
?>