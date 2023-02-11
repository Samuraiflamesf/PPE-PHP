<?php
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Verificação de envio do formulário
if (isset($_POST['nome']) && isset($_POST['data_nascimento'])) {
    // Preparação da Inserção
    $sql = "INSERT INTO aniversariantes (nome, data_nascimento) VALUES (:nome, :data_nascimento)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":nome", $_POST['nome']);
    $stmt->bindValue(":data_nascimento", $_POST['data_nascimento']);

    // Execução da Inserção
    $stmt->execute();
    header("Location: ../index.php?pag=aniversario");
    exit;
}
?>