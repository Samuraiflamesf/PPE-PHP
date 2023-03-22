<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class=" text-decoration-none col-4">
        <img src="https://i.postimg.cc/3r1K8zkp/Logo-Cimeb.png" alt="Image" height="50">
    </a>


    <ul class="nav col-10 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php?pag=<?php echo $menu1 ?>" class="nav-link px-2 link-secondary" id="menu1">
                Inicio
            </a></li>
        <li><a href="index.php?pag=<?php echo $menu2 ?>" class="nav-link px-2 link-dark" id="menu2">
                Formulário
            </a></li>
        <li><a href="index.php?pag=<?php echo $menu3 ?>" class="nav-link px-2 link-dark" id="menu3">
                Ramais
            </a></li>

    </ul>

    <div class="col-md-4 text-end">
        <a href="index.php?pag=<?php echo $menu4 ?>" type="button" class="btn btn-outline-primary me-2" id="menu4">
            Login
        </a>
    </div>

</header>
<?php
header('Content-Type: text/html; charset=utf-8');
?>