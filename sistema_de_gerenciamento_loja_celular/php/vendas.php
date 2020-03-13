<?php

include "../includes/menu.php";
include_once "autentica_pagina.php";

?>

<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Vendas</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/adicionarservico.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="row meio">
        <div class="tab-content responsive container">
            <section class="content-header">
                <h2> Adicionar Venda </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">vendas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
                    </ol>
                </nav>
            </section>


            <div class="row linhaFormulario">
                <div class="col-sm-12 col-lg-12 col-md-12" >
                    <form  method="POST">

                        <div class="tab-pane active border p-3" id="dados_gerais" style="background: #ffffff">
                        
                        
                            <div class="row">
                            <p class="col-sm-12 col-lg-12 col-md-12 "><i class="fa fa-list-alt margin-right-5px"></i> Dados gerais</p>
                                <div class="form-group col-sm-3 col-md-3 col-lg-3 required">
                                    <label for="nomeCliente">Cliente</label>
                                    <select class='form-control' name="nomeCliente" id="nomeCliente" autocomplete="off" required="required"></select>
                                  
                                </div>
                                <div class="form-group col-sm-3 col-md-3 col-lg-3 required">
                                   
                                    <label for="nomeResponsavel">Vendedor/Responsável</label>
                                    <select class='form-control' name="nomeResponsavel" id="nomeResponsavel" autocomplete="off" required="required" ></select>
                                </div>
                                <div class="form-group col-sm-3 col-md-3 col-lg-3 required">
                                    <label for="datepicker">Data</label>
                                    <input id="datepicker" class='form-control' name='dataVenda' required="required" placeholder = 'yyyy-mm-dd'>
                                </div>
                                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                                    <label>Situação</label>
                                    <select id="PedidoSituacao" class="form-control required valid" autocomplete="off" name="data[Pedido][situacao_id]">
                                    <option value="1511997">Em aberto</option>
                                    <option value="1511998">Em andamento</option>
                                    <option value="1511999" selected="selected">Concretizada</option>
                                    <option value="1512000">Cancelada</option>
                                    </select>
                                </div>  
                            </div>  

                        </div>
                        <div class="tab-pane active border p-3"  style="background: #ffffff">
                        <div class="row">
                            <div id="produtos" class="table-responsive-xs padding-bottom-0 produtos-servicos col-sm-12 col-lg-12 col-md-12 required">
                           
                                <p><i class="fas fa-cube"></i> Produtos</p>
                                <table cellpadding="0" cellspacing="0" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th  class="required"> Produto </th>
                                            <th class="coluna-variacao">Detalhes</th>
                                            <th class="required">Quant.</th>
                                            <th class="required">Valor</th>
                                            <th>Desconto <i>(R$)</i></th>
                                            <th width="1" class="text-center">Del</th>
                                        </tr>
                                        <tr>
                                            <td><input id="nomeProduto" class='form-control' name='nomeProduto' required="required" placeholder = 'Nome do Produto'></td>
                                            <td><input id="detalhesProduto" class='form-control' name='detalhesProduto' required="required" placeholder = 'Detalhes do Produto'></td>
                                            <td><input id="qtdProduto" class='form-control' name='qtdProduto' required="required" ></td>
                                            <td><input id="valorProduto" class='dinheiro form-control' name='valorProduto' required="required" ></td>
                                            <td>
                                                <input class="dinheiro mascara-valor form-control valid" name="desconto_valor"  autocomplete="off" type="text" >
                                            </td>
                                            <td><input id="detalhesProduto" class='form-control' name='detalhesProduto' required="required" ></td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <button type="button" id="adicionar-produto" class="margin-top-10px btn" style="background-color:#210268;color:white"> <i class="fas fa-plus"></i> Adicionar outro produto</button>
                          
                             </div>
                        </div>
                        </div>

                        <div class="tab-pane active border p-3"  style="background: #ffffff">
                        <div class="row">
                            <div id="servico" class="table-responsive-xs padding-bottom-0 produtos-servicos col-sm-12 col-lg-12 col-md-12 required">
                           
                                <p><i class="fas fa-wrench"></i> Serviços</p>
                                <table cellpadding="0" cellspacing="0" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th  class="required" > Serviço </th>
                                            <th class="required" >Detalhes</th>
                                            <th class="required" >Valor</th>
                                            <th>Desconto <i>(R$)</i></th>
                                            <th width="1" class="text-center">Del</th>
                                        </tr>
                                        <tr>
                                            <td><select class='form-control' name="servicoVendas" id="servicoVendas"><option value='-1'>Selecione um serviço</option></select></td> 
                                            <td><input class='form-control' name="detalhesServ"></td> 
                                            <td><input class='dinheiro form-control'name="valorServicoVenda"></td> 
                                            <td><input class='form-control'name="descontoServVenda"></td> 
                                            <td><input type="button" class='form-control'name="descontoServVenda"></td>    
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <button type="button" id="adicionar-produto"  class="margin-top-10px btn" style="background-color:#210268;color:white"> <i class="fas fa-plus"></i> Adicionar outro serviço</button>
                          
                             </div>
                        </div>
                        </div>
                        <div class="tab-pane active border p-3"  style="background: #ffffff">
                        <div id="total" class="table-responsive-xs padding-bottom-0 col-sm-12 col-lg-12 col-md-12">
                       
                            <p class="text"><i class="fas fa-file-invoice-dollar"></i> Total</p>
                            
                            <div class="table-responsive">
                                <table cellpadding="0" cellspacing="0" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="required">Serviços</th>
                                            <th>Produtos</th>
                                            <th>Desconto <small><i>(R$)</i></small></th>
                                            <th>Desconto <small><i>(%)</i></small></th>
                                            <th class="required">Valor total</th>
                                        </tr>
                                        <tr>
                                            <td><input name="" readonly="readonly" class="dinheiro form-control col-sm-12 col-lg-12 col-md-12" autocomplete="off" type="text" id="PedidoValorServicos"></td>
                                            <td><input name="" readonly="readonly" class="dinheiro form-control col-sm-12 col-lg-12 col-md-12" autocomplete="off" type="text" id="PedidoValorProdutos"></td>
                                            <td><input name="" class="dinheiro form-control col-sm-12 col-lg-12 col-md-12" autocomplete="off" type="text" id="PedidoDescontoValor"></td>
                                            <td><input name="" class=" form-control col-sm-12 col-lg-12 col-md-12" autocomplete="off" type="text" id="PedidoDescontoPorcentagem"></td>
                                        <td>
                                        <!-- <input type="hidden" name="" value="0,00" autocomplete="off" id="PedidoValorOutros"><input type="hidden" name="data[Pedido][valor_custo]" autocomplete="off" id="PedidoValorCusto"> -->
                                        <input name="Pedido_valor_total" readonly="readonly" class="dinheiro valor-total-pedido form-control" value="0,00" autocomplete="off" type="text" id="PedidoValorTotal">                        
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                        </div>

                        <div class="tab-pane active border p-3"  style="background: #ffffff">
                            <div class="row p-3">
                                <div class="both col-sm-12 col-lg-12 col-md-12 margin-top-10px">
                                    <button class="btn btn-success btn-responsive" name="btn-cadastrar" type="submit" id="btnCadastrar"><i
                                            class="fas fa-check"></i> Cadastrar</button>
                                    <a href="#" class="btn btn-danger btn-responsive">
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
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
        <script>
            $(function(){
                $( "#datepicker" ).datepicker({
                    dateFormat: "yy-mm-dd",
                    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });

                $("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
            });
        </script>

</body>
</html>
