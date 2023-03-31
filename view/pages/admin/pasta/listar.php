<?php 
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

// Preparação da Busca
$sql = "SELECT * FROM pasta ORDER BY id";
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
            Lista de Nome de Pasta
        </h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        ID
                    </th>
                    <th scope="col">
                        Nome
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
                            <?php echo $registro['id']; ?>
                        </td>
                        <td>
                            <?php echo $registro['nome']; ?>
                        </td>
                        <td>
                            <a href="pasta/atualizar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning">
                                Atualizar
                            </a>

                            <a href="pasta/deletar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger">
                                Deletar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>