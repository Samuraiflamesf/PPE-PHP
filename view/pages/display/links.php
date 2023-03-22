 <?php
    // Conexão com o Banco de Dados
    require_once('../int/conexao.php');
    ?>
 <h2 class="text-center">
     Links
 </h2>
 <?php
    $sql = "SELECT * FROM links";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='shadow-sm p-1'>";
        echo "<a class='text-center w-100 btn btn-outline-dark ' href='" . $row["link"] . "'>";
        echo $row["nome"];
        echo "</a>";
        echo "</div>";
    }
    $conn->close();
    ?>