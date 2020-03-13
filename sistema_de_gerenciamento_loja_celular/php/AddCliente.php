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
    <link rel="stylesheet" href="../css/geral.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row meio ">
        <div class="tab-content responsive container">
            <section class="content-header">
                <h2> Adicionar Cliente </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="breadcrumb-item"><a href="clientes.php">Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
                    </ol>
                </nav>
            </section>

            <div class="row linhaFormulario">
                <div class="col-sm-12 col-lg-12 col-md-12" >
                    <form  method="POST" > 
                        <div class="tab-pane active border p-3" id="dados_gerais" style="background: #ffffff">
                            <p class="col-sm-12 col-lg-12 col-md-12 "><i class="fa fa-list-alt margin-right-5px"></i> Dados gerais</p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label for="ClienteNome">Nome</label>
                                    <input name="nomeCliente" required="required" class="nome-fantasia required form-control" value="" maxlength="100" autocomplete="off" type="text" id="ClienteNome">
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label for="ClienteCelular"> Telefone</label>
                                    <input name="celularCliente" class="telefone form-control" maxlength="50" autocomplete="off" type="text" id="ClienteCelular">
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label for="ClienteEmail">E-mail</label>
                                    <input name="emailCliente" class="email form-control" maxlength="60" autocomplete="off" type="email" id="ClienteEmail">
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3">
                                    <label for="ClienteAtivo">Situação</label>
                                    <select name="data[Cliente][ativo]" class="form-control valid" autocomplete="off" id="ClienteAtivo">
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <p class="col-sm-12 col-lg-12 col-md-12 margin-top-0"><i class="fas fa-map-marker-alt"></i> Endereço</p>

                            <div class="row">
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label>Rua</label>
                                    <input type="text" maxlength="60" name="data[ClientesEndereco][0][rua]" class="rua form-control">
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label>Bairro</label>
                                    <input type="text" name="data[ClientesEndereco][0][bairro]" class=" bairro form-control">
                                </div>
                                <div class="form-group col-sm-2 col-lg-2 col-md-2">
                                    <label>Número</label>
                                    <input type="text" maxlength="60" name="data[ClientesEndereco][0][numero]" class="numero form-control">
                                </div>
                                <div class="campo-cidade form-group col-sm-4 col-lg-4 col-md-4 required">
                                    <label>Cidade</label>
                                   
                                    <input type="text" class="form-control" autocomplete="off" id="token-input-cidade-2" style="outline: none;">
                                </div>

                            </div>
                            <p class="margin-top-20px col-sm-12 col-lg-12 col-md-12 "><i class="fa fa-bullhorn margin-right-5px"></i> Contatos</p>
                            <div class="row">
                                <div class="form-group col-sm-4 col-lg-4 col-md-4 required">
                                    <label>Instagram</label>
                                    <input type="text" maxlength="60" name="instaCliente" class="form-control" placeholder='@exemplo'>
                                </div>
                                <div class="form-group col-sm-4 col-lg-4 col-md-4">
                                    <label>Facebook</label>
                                    <input type="text" name="faceCliente" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3">
                                    <label>Whatsapp</label>
                                    <input type="text" maxlength="60" name="WhatsCliente" class="telefone form-control" >
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="margin-top-10px col-sm-12 col-lg-12 col-md-12">
                                <button id="cadastrar" class="btn btn-success btn-responsive" type="button"> <i class="fas fa-check"></i> Cadastrar</button>                   
                                <a href="clientes.php" class="btn btn-danger btn-responsive"><i class="fas fa-times"></i> Cancelar</a>               
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
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

        <script>
            $(function(){

                jQuery("input.telefone")
                    .mask("(99) 9999-9999?9")
                    .focusout(function (event) {  
                    var target, phone, element;  
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);  
                    element.unmask();  
                if(phone.length > 10) {  
                    element.mask("(99) 99999-999?9");  
                } else {  
                    element.mask("(99) 9999-9999?9");  
                }  
                });

            });
        
        </script>
</body>
</html>