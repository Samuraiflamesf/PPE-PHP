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
    // id	nome_arquivo	selecione_pasta	date_uploaded	selecione_pdf
    if (isset($_POST['nome_arquivo']) && isset($_POST['selecione_pasta'])) {
        // Preparação da InserçãoVALUES (?, NOW())")
        $sql = "INSERT INTO pdf_files (nome_arquivo, selecione_pasta, date_uploaded) VALUES (:nome_arquivo, :selecione_pasta, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":nome_arquivo", $_POST['nome_arquivo']);
        $stmt->bindValue(":selecione_pasta", $_POST['selecione_pasta']);
        $stmt->execute();
        // Verifica se o tipo
        $tipo = $_POST['selecione_tipo'];
        if ($tipo == 1) {
            if (isset($_FILES["selecione_pdf"]) && $_FILES["selecione_pdf"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                $id = $pdo->lastInsertId();
                $selecione_pdf = $id . ".pdf";
                // Define o caminho completo do arquivo no servidor
                $target_file = $target_dir . $selecione_pdf;
                // Move o arquivo enviado para o diretório de destino
                if (move_uploaded_file($_FILES["selecione_pdf"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE pdf_files SET selecione_pdf = :selecione_pdf WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":selecione_pdf", $selecione_pdf);
                    $stmt->bindParam(":id", $id);
                    // Executa a declaração SQL e verifica se ela foi bem sucedida
                    if ($stmt->execute()) {
                        echo "Arquivo enviado com sucesso!";
                    } else {
                        echo "Erro ao enviar o arquivo.";
                    }
                }
            }
        } elseif ($tipo == 2) {
            if (isset($_FILES["selecione_pdf"]) && $_FILES["selecione_pdf"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                $id = $pdo->lastInsertId();
                $selecione_pdf = $id . ".doc";
                // Define o caminho completo do arquivo no servidor
                $target_file = $target_dir . $selecione_pdf;
                // Move o arquivo enviado para o diretório de destino
                if (move_uploaded_file($_FILES["selecione_pdf"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE pdf_files SET selecione_pdf = :selecione_pdf WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":selecione_pdf", $selecione_pdf);
                    $stmt->bindParam(":id", $id);
                    // Executa a declaração SQL e verifica se ela foi bem sucedida
                    if ($stmt->execute()) {
                        echo "Arquivo enviado com sucesso!";
                    } else {
                        echo "Erro ao enviar o arquivo.";
                    }
                }
            }
        } elseif ($tipo == 3) {
            if (isset($_FILES["selecione_pdf"]) && $_FILES["selecione_pdf"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "uploads/";
                $id = $pdo->lastInsertId();
                $selecione_pdf = $id . ".xls";
                // Define o caminho completo do arquivo no servidor
                $target_file = $target_dir . $selecione_pdf;
                // Move o arquivo enviado para o diretório de destino
                if (move_uploaded_file($_FILES["selecione_pdf"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE pdf_files SET selecione_pdf = :selecione_pdf WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(":selecione_pdf", $selecione_pdf);
                    $stmt->bindParam(":id", $id);
                    // Executa a declaração SQL e verifica se ela foi bem sucedida
                    if ($stmt->execute()) {
                        echo "Arquivo enviado com sucesso!";
                    } else {
                        echo "Erro ao enviar o arquivo.";
                    }
                }
            }
        }
        else {
            exit();
        }
        
    }
    //header("Location: ../index.php?pag=form");

exit;

?>