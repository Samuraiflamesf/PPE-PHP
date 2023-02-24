<?php
$nome_pag = 'Formulário';
?>
<main id="main" class="main">
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
    <section class="section">
        <div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">
                        Adicionar um Arquivo
                    </h5>
                    <!-- Formulário de Cadastro -->
                    <?php require_once('./forms/form.php') ?>

                </div>
            </div>

        </div>


    </section>

    <?php
    require_once('./forms/listar.php');
    ?>
</main>