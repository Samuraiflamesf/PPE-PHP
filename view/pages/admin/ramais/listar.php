<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

// Preparação da Busca
$sql = "SELECT id, setor, telefone FROM ramais ORDER BY setor";
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
            Lista de Ramais
        </h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        ID
                    </th>
                    <th scope="col">
                        Setor
                    </th>
                    <th scope="col">
                        Telefone
                    </th>
                    <th scope="col">
                        Ações
                    </th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $registro['id']; ?>
                        </th>
                        <td>
                            <?php echo $registro['setor']; ?>
                        </td>
                        <td>
                            <?php echo $registro['telefone']; ?>
                        </td>
                        <td>
                            <a href="ramais/atualizar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning">
                                Atualizar
                            </a>

                            <a href="ramais/deletar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger">
                                Deletar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>