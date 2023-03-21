<?php
// Receber o ID do registro a ser deletado
$id = $_GET['id'];
// Conexão com o Banco de Dados
require_once("../../../../int/conexao.php");
// Preparação da Deletação
$sql = "DELETE FROM pdf_files WHERE id = ?";
$stmt = $pdo->prepare($sql);

// Execução da Deletação
$stmt->execute([$id]);
// Redirecionar para a página de listagem
header("Location: ../index.php?pag=form");
