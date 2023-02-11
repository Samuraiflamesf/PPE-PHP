<?php
$nome_pag = 'Ramais';
?><main id="main" class="main">
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
        <div class="col">
            <div class="card">
                <div class="card-body pb-0">
                    <h5 class="card-title pb-0">
                        Formulário de Cadastro
                    </h5>
                    <!-- Formulário de Cadastro -->
                    <?php require_once('./ramais/form.php') ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once('./ramais/listar.php');
    ?>

</main>