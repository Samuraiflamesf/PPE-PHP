<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');
// Preparação da Busca
$sql = "SELECT nome_arquivo, selecione_pasta, id FROM pdf_files ORDER BY id";
$stmt = $pdo->prepare($sql);

// Execução da Busca
$stmt->execute();

// Resultado
$registros = $stmt->fetchAll();
?>
<!-- Lista de Aniversariantes -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            Lista de Arquivos
        </h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Nome dos Arquivos
                    </th>
                    <th scope="col">
                        Nome da pasta
                    </th>
                    <th scope="col">
                        Ações
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) { ?>
                    <tr>

                        <td>
                            <?php echo $registro['nome_arquivo']; ?>
                        </td>
                        <td>
                            <?php
                            $selecione_pasta = $registro['selecione_pasta'];
                            // Consultar a tabela para obter o nome correspondente
                            $sql = "SELECT nome FROM pasta WHERE id = '$selecione_pasta'";
                            $result = mysqli_query($conn, $sql);

                            // Verificar se houve resultado
                            if (mysqli_num_rows($result) > 0) {
                                // Obter o nome correspondente
                                $result = mysqli_fetch_assoc($result);
                                $nome = $result['nome'];

                                // Exibir o nome correspondente
                                echo $nome;
                            } else {
                                // Se não houver resultado, exibir uma mensagem de erro
                                echo "-";
                            }

                            // Fecha a conexão com o banco de dados

                            ?>

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
                <?php }
                $conn->close();?>
                
            </tbody>

        </table>

    </div>
</div>