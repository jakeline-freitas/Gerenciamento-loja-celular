<?php

include "../includes/menu.php";
include_once "autentica_pagina.php";

?>
<html lang="pt-br">


<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Clientes</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/servicoscss.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row meio">
        <div class="coluna conteudo container">

                <section class="content-header">
                    <h1><i class="fa fa-users fa-lg  margin-right-5px"></i> Listar clientes</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"> <i class="fa fa-dashboard"></i> Inicio</a></li>
                                <!-- <li class="breadcrumb-item active"><a href="servicos.html">Clientes</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                            </ol>
                        </nav>
                </section>
            <!-- <input class="form-group col-sm-4 col-md-4 col-lg-4 required"> -->
            <div class="row margin-bottom-15px container">
                <a  class="btn btn-sm btn-success btn-create" href="AddCliente.php"><i class="fas fa-plus"></i> Adicionar
                    cliente</a>
            </div>

            
            <div class=" tabela">
                <div class="row">


                    <div class="col-md-12 col-md-offset-1">
                        <div class="panel panel-default panel-table">
                           
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>

                                                
                                                <th>Name</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Cadastrado em</th>
                                                <th>Ativo</th>
                                                <th><em class="fa fa-cog"></em></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
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
</body>

</html>