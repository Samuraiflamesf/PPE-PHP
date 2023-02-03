<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
        </svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
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

    <div class="col-md-3 text-end">
        <a href="index.php?pag=<?php echo $menu4 ?>" type="button" class="btn btn-outline-primary me-2" id="menu4">
            Login
        </a>
    </div>
</header>