<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

if (isset($_POST['id'])) {
    $ids = $_POST['id'];
    $count = 1;
    foreach ($ids as $id) {
        $sql = "UPDATE pasta SET `order` = :order WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':order' => $count, ':id' => $id));
        $count++;
    }
}