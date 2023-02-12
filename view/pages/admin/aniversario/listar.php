<?php
// Conexão com o Banco de Dados
require_once('../../../int/conexao.php');

// Preparação da Busca
$sql = "SELECT id, nome, data_nascimento FROM aniversariantes ORDER BY data_nascimento";
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
            Lista de Aniversariantes
        </h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Nome
                    </th>
                    <th scope="col">
                        Data de Nascimento
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
                            <?php echo $registro['data_nascimento']; ?>
                        </td>
                        <td>
                            <a href="aniversario/atualizar.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning">
                                Atualizar
                            </a>

                            <a href="aniversario/deletar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger">
                                Deletar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>