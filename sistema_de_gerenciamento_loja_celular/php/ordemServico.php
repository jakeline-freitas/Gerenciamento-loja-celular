<?php

include "../includes/menu.php";

include_once '../php_action/db_connect.php';
include_once "autentica_pagina.php";

?>
<html>
<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Ordem de Serviços</title>
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
            <h1><i class="fas fa-tools margin-right-5px"></i> Listar Ordens de serviços</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="ordemServico.php">OS</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Listar</li>
                </ol>
            </nav>
        </section>
        <div class="row margin-bottom-15px container">
            <a  class="btn btn-sm btn-success btn-create" href="AddOrdemServico.php"><i class="fas fa-plus"></i> Adicionar
                ordem de serviço</a>
        </div>


        <div class=" tabela">

                <div class="row">


                    <div class="col-md-12 col-md-offset-1">

                        <div class="panel panel-default panel-table">
                           
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>

                                            
                                            <th>Name do cliente</th>
                                            <th>Nome do serviço</th>
                                            <th>Data de entrada </th>
                                            <th>valor total</th>
                                            <th>Situação</th>
                                            <th><em class="fa fa-cog"></em></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

</body>
</html>