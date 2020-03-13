<?php
// Conexão
include_once '../php_action/db_connect.php';

include_once "../includes/menu.php";

if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM servicos WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;

?>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Editar Serviços</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adicionarservico.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
   
</head>

<body>

    <div class="row meio  ">
        <div class="tab-content responsive container">
            <section class="content-header">
                <h2><em> Editar serviços</em></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="servicos.php">Serviços</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
                    </ol>
                </nav>
            </section>
            <div class="row linhaFormulario">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <form action="../php_action/update.php" method="POST" >
                    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                        <div class="tab-pane active border p-3" id="dados gerais">
                            <div class="row">
                                <div class="form-group col-sm-4 col-md-4 col-lg-4 required ">
                                    <label for="ProdutoNome">Nome do serviço</label>
                                    <input name="nome" class="form-control error" maxlength="250" autocomplete="off"
                                        type="text" id="ProdutoNome" value="<?php echo $dados['nome'];?>">
                                </div>

                                <div class=" required form-group col-sm-3 col-md-3 col-lg-3">
                                <label for="ProdutoValorServico">Valor do serviço</label>
                                    <input name="valor_servico" casas="2" class="mascara-valor form-control valid"
                                        autocomplete="off" type="text" id="ProdutoValorServico" placeholder=""  value="<?php echo $dados['valor'];?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12"><label
                                        for="ProdutoObservacoes">Observações</label><textarea name="observacoes"
                                        class="form-control valid" autocomplete="off" cols="30" rows="6"
                                        id="ProdutoObservacoes" value="<?php echo $dados['descricao'];?>"></textarea>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="both col-sm-12 col-lg-12 col-md-12 margin-top-10px">
                                    <button class="btn btn-success btn-responsive" name="btn-editar" type="submit" id="btnCadastrar"><i
                                            class="fas fa-check"></i> Atualizar</button>
                                    <a href="servicos.php" class="btn btn-danger btn-responsive">
                                        <i class="fas fa-times"></i> Cancelar</a>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
   
</body>

</html>