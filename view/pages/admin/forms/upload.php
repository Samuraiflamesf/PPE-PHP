<head>
    <!-- Vendor -->
    <link href="../../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Styles Custom -->
    <link href="../../../../assets/css/style.css" rel="stylesheet">
</head>

<div class="container">


    <?php
    // Conexão com o Banco de Dados
    require_once('../../../../int/conexao.php');

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Informações do arquivo PDF enviado
    $pdfFile = $_FILES["pdfFile"]["name"];
    $pdfFile_temp = $_FILES["pdfFile"]["tmp_name"];
    $newName = $_POST["newName"];
    $target_dir = "uploads/";
    $timestamp = date("Y-m-d");

    // Inserir registro na tabela "pdf_files"
    $sql = "INSERT INTO pdf_files (original_name, new_name, date_uploaded, pdf_content) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $pdfContent = file_get_contents($pdfFile_temp);
        $stmt->bind_param("sssb", $pdfFile, $newName, $timestamp, $pdfContent);
        if ($stmt->execute()) {
            $newFile = $target_dir . $pdfFile;
            move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $newFile);
            echo "<div class='alert alert-success mt-5' role='alert'>";
            echo "O arquivo PDF foi enviado com sucesso e salvo no banco de dados.";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger mt-5' role='alert'>";
            echo "Erro ao inserir registro na tabela pdf_files:" . $stmt->error;
            echo "</div>";
        }
        $stmt->close();
    } else {
        echo "<div class='alert alert-danger mt-5' role='alert'>";
        echo "Erro ao preparar o comando SQL: " . $conn->error;
        echo "</div>";
    }

    $conn->close();
    ?>
    <a href="
    <?php
    header("Location: ../index.php?pag=form");
    ?>" class="btn btn-primary">
        Voltar
    </a>
</div>