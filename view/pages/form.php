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
        $sql = "SELECT * FROM pdf_files";
        $result = $conn->query($sql);
        // Define um contador para controlar quantos valores já foram exibidos
        $count = 0;
        if ($result->num_rows > 0) {
            echo "<div class='row'>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col'><div class='card'>";
                $pdfContent = base64_encode($row["pdf_content"]);
                $pdfSrc = "data:application/pdf;base64," . $pdfContent;
                echo "<a href='../view/pages/admin/forms/uploads/". $row["original_name"]. "' download";
                echo "<div class='card-body'><h5 class='card-title mb-0 pb-0'>";
                echo $row["new_name"];
                $data = $row["date_uploaded"];
                $newdate = substr($data, 8, 2) .'/'. substr($data,5, 2) . '/' . substr($data, 0, 4);
                echo "</h5><p class='card-text'> Data: " .
                $newdate
                . "</p></div></a></div>";
                echo "";
                echo "";

                // Incrementa o contador
                $count++;

                // Se o contador for divisível por 4, imprime uma quebra de linha
                if (
                    $count % 3 == 0
                ) {
                    echo "</div><div class='row'>";
                }
            }
            echo "</div>";
            
        } else {
            echo "<div class='alert alert-warning mt-2' role='alert'>";
            echo "Nenhum arquivo PDF encontrado no banco de dados.";
            echo "</div>";
        }

        $conn->close();
        ?>

