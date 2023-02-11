<?php
$nome_pag = 'Ramais';
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
</div>