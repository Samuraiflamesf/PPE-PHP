<?php
//Criar o usuario admin caso nao exista 
$query = $pdo->query("SELECT * FROM usuarios WHERE nivel ='Admin'");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($result);

//Criar o nivel admin caso nao exista 
$query2 = $pdo->query("SELECT * FROM niveis WHERE nivel ='Admin'");
$result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$total_reg2 = @count($result2);

if ($total_reg == 0) {
    $pdo->query("INSERT INTO usuarios SET nome='$nome_admin', email = '$email_admin', senha='123', nivel = 'Admin' ");
}

if ($total_reg2 == 0) {
    $pdo->query("INSERT INTO niveis SET nivel='Admin'");
}


?>

<section class="section  d-flex flex-column align-items-center justify-content-center py-4">

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">PPE PHP</span>
                </a>
            </div>
            <!-- End Logo -->
            <div class="card mb-3 ">
                <div class="card-body mx-5">
                    <div class="mx-5 pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">
                            Área Administrativa
                        </h5>
                    </div>

                    <form class="row g-3 needs-validation mb-3" novalidate method="post" action="../int/autenticar.php">

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="E-mail"
                                    name="email" required autofocus>
                                <label for="floatingEmail">E-mail</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating ">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha"
                                    name='senha' required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Entrar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</section>

</div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../assets/vendor/quill/quill.min.js"></script>
<script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>

</html>