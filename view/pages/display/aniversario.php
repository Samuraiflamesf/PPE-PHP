<?php
// Conexão com o Banco de Dados
require_once("../int/conexao.php");
?>
<h2 class="text-center">
    Aniversariantes do Mês
</h2>

<!-- Resultado da Lista -->
<?php
$mes = date("m");
if (isset($mes)) {
    // Preparação da Consulta
    $sql = "SELECT nome, data_nascimento FROM aniversariantes WHERE MONTH(data_nascimento) = :mes ORDER BY DAY(data_nascimento), MONTH(data_nascimento)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mes", $mes);

    // Execução da Consulta
    $stmt->execute();

    echo "<div class='col'>";
    echo "<ul class='list-group'>";
    // Define um contador para controlar quantos valores já foram exibidos
    $count = 0;
    $numResultados = $stmt->rowCount();
    $metade = $numResultados/2;
    while ($aniversariante = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Incrementa o contador
        $count++;
        // Resultado da Consulta
        
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo  $aniversariante['nome'];
        echo "<h5 class='mt-1 mb-1 text-end'>";
        echo "<span class='badge bg-primary '>" . date("d/m", strtotime($aniversariante['data_nascimento']));
        echo "</span></h5></li>";
        // Se o contador for divisível por 4, imprime uma quebra de linha
        if ($count == $metade) {
            echo "</div>";
            echo "<div class='col'>";
            echo "<ul class='list-group'>";
        }
    }
    echo "</ul>";
    echo "</div>";
}

?>