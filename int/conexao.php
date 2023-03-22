<?php
require_once("config.php");

date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$user", "$password", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn = new mysqli($servidor, $user, $password, $banco);
} catch (Exception $e) {
    echo "Não foi possível conectar ao banco de dados! <br><br>" . $e;
}
?>
