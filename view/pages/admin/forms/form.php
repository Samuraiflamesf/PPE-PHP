<form action="forms/upload.php" method="post" enctype="multipart/form-data">
    <!-- Nome -->
    <div class="form-group">
        <label for="newName" class="p-2 px-0">
            Novo nome do arquivo:
        </label>
        <input type="text" name="newName" id="newName" class="form-control">
    </div>
    <!-- TIPO -->
    <div class="form-group">
        <label for="pdfFile" class="p-2 px-0">
            Selecione o arquivo PDF:
        </label>
        <input type="file" name="pdfFile" id="pdfFile" class="form-control">
    </div>

    <!-- Botão de Envio -->
    <input type="submit" class="btn btn-primary p-2 m-3 mx-0" value="Enviar">

</form>