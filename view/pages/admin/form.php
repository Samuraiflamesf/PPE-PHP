<?php
$nome_pag = 'Formulário';
?>
<main id="main" class="main">

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

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Adicionar um Arquivo
                        </h5>
                        <p>
                            Clique no botão para adicionar um novo arquivo
                        </p>
                        <!-- Botão do Modal para ADD -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddArquivo">
                            Adicionar um Arquivo
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalAddArquivo" tabindex="-1" aria-labelledby="modalAddArquivo" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAddArquivo">
                                            Adicionar Arquivo
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">
                                            Salvar
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                            Fechar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Configurar Formulário
                        </h5>
                        <p>

                        </p>
                        <!-- Botão do Modal para ADD -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConfigForm">
                            Configurar Formulário
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalConfigForm" tabindex="-1" aria-labelledby="modalConfigForm" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalConfigForm">
                                            Configurar Formulário
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body w-100">
                                        <form action='' method='post'>
                                            <input type='text' placeholder='Nome do Arquivo' name='arq_name'>
                                            <input type='text' placeholder='Tipo' name='tipo_arq'>

                                            <input type='submit' name='register_book' value='Cadastrar Livro'>
                                        </form>
                                        <br>
                                        <form>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">
                                                    Nome do Arquivo
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                                <div class="col-sm-10">
                                                    <input type="time" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                                <div class="col-sm-10">
                                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" style="height: 100px"></textarea>
                                                </div>
                                            </div>
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                        <label class="form-check-label" for="gridRadios1">
                                                            First radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Second radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                        <label class="form-check-label" for="gridRadios3">
                                                            Third disabled radio
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row mb-3">
                                                <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                                <div class="col-sm-10">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                        <label class="form-check-label" for="gridCheck1">
                                                            Example checkbox
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                        <label class="form-check-label" for="gridCheck2">
                                                            Example checkbox 2
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Disabled</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Multi Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" multiple="" aria-label="multiple select example">
                                                        <option selected="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                                </div>
                                            </div>

                                        </form><!-- End General Form Elements -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">
                                            Salvar
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                            Fechar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>