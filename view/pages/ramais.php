<?php
$nome_pag = 'Ramais';

// Conexão com o Banco de Dados
require_once('../int/conexao.php');

// Preparação da Busca
$sql = "SELECT id, setor, telefone FROM ramais ORDER BY setor";
$stmt = $pdo->prepare($sql);

// Execução da Busca
$stmt->execute();

// Resultado
$registros = $stmt->fetchAll();
?>
<div class="container">
    <div class="pagetitle">
        <h1><?php echo $nome_pag ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php?pag=<?php echo $menu1 ?>">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <?php echo $nome_pag ?>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Lista de Aniversariantes -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Lista de Ramais</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            Setor
                        </th>
                        <th scope="col">
                            Telefone
                        </th>
                </thead>
                <tbody>
                    <?php foreach ($registros as $registro) { ?>
                        <tr>
                            <td>
                                <?php echo $registro['setor']; ?>
                            </td>
                            <td>
                                <?php
                                $numero = $registro['telefone'];
                                $tamanho = strlen($numero);
                                $numero1 = substr($numero, 0, 4);
                                $numero2 = substr($numero, $tamanho - 4);
                                echo $numero1 . '-' . $numero2;
                                ?>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>