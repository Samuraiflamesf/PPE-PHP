<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

// Preparação da Busca
$sql = "SELECT id, nome, link FROM links ORDER BY id";
$stmt = $pdo->prepare($sql);

// Execução da Busca
$stmt->execute();

// Resultado
$registros = $stmt->fetchAll();
?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            Lista dos Sites
        </h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Nome
                    </th>
                    <th scope="col">
                        Link
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
                            <?php echo $registro['nome']; ?>
                        </td>
                        <td>
                            <?php echo $registro['link']; ?>
                        </td>
                        <td>
                            <a href="links/atualizar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning">
                                Atualizar
                            </a>

                            <a href="links/deletar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger">
                                Deletar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>