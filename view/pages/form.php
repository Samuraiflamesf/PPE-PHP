 <?php
    $nome_pag = 'Formulário';
    ?><div class="container">

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
 <div class="container">
     <?php
        // Conexão com o Banco de Dados
        require_once('../int/conexao.php');
        // Consultar registros na tabela "pdf_files"
        $sql = "SELECT * FROM pasta";
        $result = $conn->query($sql);
        
        while ($row = $result->fetch_assoc()) {
            echo "<div class='h4 shadow-sm p-3 mb-3 mt-5 bg-body rounded'>";
            echo $row["nome"];
            echo "</div>";
            echo "<div class='row m-auto'>";
            $id = $row["id"];
            // Consultar registros na tabela "pdf_files"
            $sql = "SELECT * FROM pdf_files WHERE selecione_pasta = '$id'";
            $resultado = $conn->query($sql);
            // Define um contador para controlar quantos valores já foram exibidos
            $count = 0;

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    // Incrementa o contador
                    $count++;

                    echo "<div class='col'>";
                    echo "<div class='card'>";
                    $pdfContent = base64_encode($linha["selecione_pdf"]);
                    $pdfSrc = "data:application/pdf;base64," . $pdfContent;

                    echo "<a href='../view/pages/admin/forms/uploads/" . $linha["selecione_pdf"] . "' download";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title mb-0 pb-0 text-uppercase'>";
                    echo $linha["nome_arquivo"];
                    echo "</h5>";
                    $data = $linha["date_uploaded"];
                    $newdate = substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4);
                    echo "<p class='card-text'> Data: " . $newdate . "</p>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";


                    // Se o contador for divisível por 4, imprime uma quebra de linha
                    if ($count % 3 == 0) {
                        echo "</div>";
                        echo "<div class='row m-auto'>";
                    }
                }
            } else {
                echo "<div class='alert alert-warning mt-2' role='alert'>";
                echo "Nenhum arquivo PDF encontrado no banco de dados.";
                echo "</div>";
            }

            echo "</div>"; //"<div class='row m-auto'>";
        }
        $conn->close();
        ?>