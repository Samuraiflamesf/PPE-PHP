 <?php
    // Conexão com o Banco de Dados
    require_once('../int/conexao.php');
    ?>
 <h2 class="text-center">
     Links Mais Acessados
 </h2>
 <?php
    $sql = "SELECT * FROM links";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='shadow-sm w-100 m-auto rounded mt-1 mb-1 p-1' >";
        echo "<a class='text-center btn btn-outline-dark w-100 ' href='" . $row["link"] . "'>";
        echo $row["nome"];
        echo "</a>";
        echo "</div>";
    }
    $conn->close();
    ?>