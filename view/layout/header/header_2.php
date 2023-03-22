<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <i class="bi bi-list toggle-sidebar-btn"></i>
        <a href="index.php?pag=<?php echo $menu1 ?>" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block px-2 py-2">PPE PHP</span>
        </a>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        <?php echo 'Olá, ' . $primeiroNome ?>
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>
                            <?php echo $nome_usuario ?>
                        </h6>

                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="../../../int/logout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>
                                Sair
                            </span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>

</header><!-- End Header -->

<div class="container-fluid">
    <?php
    require_once('sidebar.php');
    ?>
</div>
<?php
header('Content-Type: text/html; charset=utf-8');
?>