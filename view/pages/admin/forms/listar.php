<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

// Processar atualização ou exclusão
if (isset($_POST["action"]) && isset($_POST["pdf_id"])) {
    $pdfId = $_POST["pdf_id"];
    if ($_POST["action"] == "update") {
        $newName = $_POST["new_name"];
        $sql = "UPDATE pdf_files SET new_name='$newName' WHERE id=$pdfId";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-2' role='alert'>";
            echo "Nome do arquivo atualizado com sucesso.";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger mt-2' role='alert'>";
            echo "Erro ao atualizar o nome do arquivo: " . $conn->error;
            echo "</div>";
        }
    } else if ($_POST["action"] == "delete") {
        $sql = "DELETE FROM pdf_files WHERE id=$pdfId";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-2' role='alert'>";
            echo "Arquivo excluído com sucesso.";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger mt-2' role='alert'>";
            echo "Erro ao excluir o arquivo: " . $conn->error;
            echo "</div>";
        }
    }
}

// Consultar registros na tabela "pdf_files"
$sql = "SELECT * FROM pdf_files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir a lista de arquivos PDF encontrados em uma tabela
    echo "<div class='card'><div class='card-body'><h5 class='card-title'>Lista de Arquivos</h5><table class='table table-hover'>";
    echo "<th scope='col'>Nome do arquivo</th><th scope='col'>Ação</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $pdfContent = base64_encode($row["pdf_content"]);
        $pdfSrc = "data:application/pdf;base64," . $pdfContent;
        echo "<tr>";
        echo "<td class='row'>";
        echo "<form method=\"POST\" class='row'>";
        echo "<input type=\"hidden\" name=\"pdf_id\" value=\"" . $row["id"] . "\" class='form-control'>";
        echo "<input type=\"hidden\" name=\"action\" value=\"update\" >";
        echo "<input type=\"text\" name=\"new_name\" value=\"" . $row["new_name"] . "\"class='form-control col'>";
        echo "<input type=\"submit\" value=\"Atualizar\" class='btn btn-warning p-1 m-1 col-2'>";
        echo "</form>";
        echo "</td>";
        echo "<td >";
        echo "<form method=\"POST\">";
        echo "<input type=\"hidden\" name=\"pdf_id\" value=\"" . $row["id"] . "\" >";
        echo "<input type=\"hidden\" name=\"action\" value=\"delete\" >";
        echo "<input type=\"submit\" value=\"Excluir\" class='btn btn-warning p-1 m-1'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div class='alert alert-warning mt-2' role='alert'>";
    echo "Nenhum arquivo PDF encontrado no banco de dados.";
    echo "</div>";
}

$conn->close();
?>

<!-- Lista de Arquivos 

                <?php foreach ($registros as $registro) { ?>
                    <tr>

                        <td>
                            <?php echo $registro['new_name']; ?>
                        </td>
                        <td>
                            <?php echo $registro['date_uploaded']; ?>
                        </td>
                        <td>
                            <a href="forms/atualizar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning">
                                Atualizar
                            </a>

                            <a href="forms/deletar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger">
                                Deletar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>-->