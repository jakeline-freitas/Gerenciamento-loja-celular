<?php
// include '../includes/message.php';
include_once "autentica_pagina.php";
include_once "../includes/menu.php";
// Conexão
include_once '../php_action/db_connect.php';
// Header




?>

<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Serviços</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/servicoscss.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row meio">
    
        <div class="coluna conteudo container">
            <section class="content-header">
                <h1><i class="fas fa-tools margin-right-5px"></i> Listar serviços</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="breadcrumb-item"><a href="servicos.php">Serviços</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listar</li>
                    </ol>
                </nav>
            </section>
            <div class="row margin-bottom-15px container">
                <a  class="btn btn-sm btn-success btn-create" href="AdicionarServico.php"><i class="fas fa-plus"></i> Adicionar
                    serviço</a>
            </div>
            
            <div class=" tabela">

                <div class="row">


                    <div class="col-md-12 col-md-offset-1">

                        <div class="panel panel-default panel-table">
                           
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>

                                            
                                            <th>Nome</th>
                                            <th>valor</th>
                                            <th><em class="fa fa-cog"></em></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                            $sql = "SELECT * FROM servicos WHERE status = 1";
                                            $resultado = mysqli_query($connect,$sql);

                                            while($dados = mysqli_fetch_array($resultado)):
                                        
                                        ?>
                                            <tr>

                                                
                                                <td><?php echo $dados['nome'];?></td>
                                                <td><?php echo $dados['valor'];?></td>
                                                <td align="center">
                                                    <a class="btn btn-info"><em class="fa fa-search"></em></a>
                                                    <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning" ><em class="fa fa-pencil"></em></a>
                                                    <a  href="#modal<?php echo $dados['id']; ?>" class="btn btn-danger" data-toggle="modal"><em class="fa fa-trash"></em></a>
                                                </td>


                                                    <!-- Modal Structure -->
                                                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <h4>Opa!</h4>
                                                                    <p>Tem certeza que deseja excluir esse serviço?</p>
                                                                </div>
                                                            
                                                                <div class="modal-footer">					     

                                                                    <form action="../php_action/delete.php" method="POST">
                                                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                                                        <button type="submit" name="btn-deletar" class="btn btn-danger" >Sim, quero deletar</button>

                                                                        <a href="#!" class="btn btn-secondary"  data-dismiss="modal">Cancelar</a>

                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </tr>
                                            <?php endwhile;?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
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
    <script src="../js/servico.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    
</body>

</html>