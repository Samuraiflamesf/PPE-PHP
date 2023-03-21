<?php
@session_start();
require_once("../../../int/conexao.php");
require_once("../../../int/verificar.php");
$id_usuario = $_SESSION['id_usuario'];

//Recuperar dados do usuarios
$query = $pdo->query("SELECT * from usuarios where id = '$id_usuario' ");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = $result[0]['nome'];
$email_usuario = $result[0]['email'];
$senha_usuario = $result[0]['senha'];
$nivel_usuario = $result[0]['nivel'];
$primeiroNome = strstr($nome_usuario, ' ', true);

//Menus do Painel
$menu1 = 'index';
$menu2 = 'aniversario';
$menu3 = 'form';
$menu4 = 'ramais';
$menu5 = 'pasta';
$menu6 = 'links';

//Recuperar e direcionar pagina 
if (@$_GET['pag'] == "") {
    $pag = $menu1;
} else {
    $pag = @$_GET['pag'];
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Titulo -->
    <title>
        <?php echo $nome_sistema ?>
    </title>
    <!-- Meta tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link rel="shortcut icon" href="../../../public/FlameBox.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor -->
    <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Styles Custom -->
    <link href="../../../assets/css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b04ef94895.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">
        <?php
        require_once('../../layout/header/header_2.php');
        ?>
    </div>

    <div class="container">
        <?php
        require_once($pag . '.php');
        ?>
    </div>

    <div class="container">
        <?php
        require_once('../../layout/footer/footer.php');
        ?>
    </div>


</html>