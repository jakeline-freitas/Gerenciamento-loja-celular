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
    <link rel="stylesheet" href="../css/geral.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>
<body>


<div id="dados-gerais" class="col-sm-12 col-lg-12 col-md-12">
    <fieldset class="muted">
        <legend><h4 class="text-primary"><i class="fa fa-list-alt margin-right-5px"></i>Dados gerais</h4></legend>
        <input type="hidden" name="data[Pedido][existe_estoque]" value="1" autocomplete="off" id="PedidoExisteEstoque">        <div id="numero-pedido" class="required form-group col-sm-2 col-lg-2 col-md-2">
            <label for="ProdutoGrupoId">Número</label>
            <div class="input-group">
                <input name="data[Pedido][codigo]" required="required" class="form-control mascara-num required" disabled="disabled" value="2" maxlength="11" autocomplete="off" type="text" id="PedidoCodigo"><input type="hidden" name="" value="2" autocomplete="off" id="PedidoCodigoAtual">                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-edit"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="form-group col-sm-4 col-lg-4 col-md-4 required"><label for="ClienteId">Cliente</label><ul id="ul-ClienteId" class="token-input-list"><li class="token-input-input-token"><input type="text" required="required" class="form-control error" placeholder="Digite para buscar" autocomplete="off" id="token-input-ClienteId" style="outline: none;"><label for="token-input-ClienteId" generated="true" class="error" style="display: block;"></label><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-weight: 400; letter-spacing: normal; white-space: nowrap;"></tester></li></ul><input name="data[Pedido][cliente_id]" id="ClienteId" class="form-control" autocomplete="off" type="text" style="display: none;"></div><input type="hidden" name="data[Pedido][nome_cliente]" id="NomeCliente" autocomplete="off"><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="UsuarioId">Vendedor / Responsável</label><ul id="ul-UsuarioId" class="token-input-list"><li class="token-input-token"><p data-toggle="tooltip" data-placement="top" title="" data-original-title="Aria Ferreira silva">Aria Ferreira silva</p><span class="token-input-delete-token"><i class="glyphicon glyphicon-trash"></i></span></li><li class="token-input-input-token"><input type="text" class="form-control" placeholder="Digite para buscar" autocomplete="off" id="token-input-UsuarioId" style="outline: none; display: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-weight: 400; letter-spacing: normal; white-space: nowrap;"></tester></li></ul><input name="data[Pedido][vendedor_id]" id="UsuarioId" class="form-control" autocomplete="off" type="text" style="display: none;"></div><input type="hidden" name="data[Pedido][nome_vendedor]" id="NomeVendedor" autocomplete="off" value="Aria Ferreira silva"><div class="form-group col-sm-3 col-lg-3 col-md-3 required"><label for="PedidoData">Data</label><input name="data[Pedido][data]" class="mascara-data form-control datepicker" maxlength="10" autocomplete="off" type="text" value="09/11/2019" id="PedidoData" required="required"></div><div class="form-group col-sm-3 col-lg-3 col-md-3"><label for="PedidoPrevisaoEntrega">Prazo de entrega</label><input name="data[Pedido][previsao_entrega]" class="datepicker form-control" autocomplete="off" type="text" value="09/11/2019" id="PedidoPrevisaoEntrega"></div>        <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
            <label>Situação</label>
            <select id="PedidoSituacao" class="form-control required" autocomplete="off" name="data[Pedido][situacao_id]">
                                    <option value="1511997">Em aberto</option>
                                    <option value="1511998">Em andamento</option>
                                    <option value="1511999" selected="selected">Concretizada</option>
                                    <option value="1512000">Cancelada</option>
                            </select>
        </div>
        <input type="hidden" name="data[Pedido][nome_situacao]" autocomplete="off" id="PedidoNomeSituacao" value="Concretizada">                <div class="form-group col-sm-3 col-lg-3 col-md-3 required">
                    <label>Canal de venda</label>
                    <select id="PedidoCanalVendaId" class="form-control required" autocomplete="off" name="data[Pedido][canal_venda_id]">
                                                    <option value="355890">Internet</option>
                                                    <option value="355888" selected="selected">Presencial</option>
                                                    <option value="355889">Telemarketing</option>
                                            </select>
                </div>
        <input type="hidden" name="data[Pedido][nome_canal_venda]" autocomplete="off" id="PedidoNomeCanalVenda" value="Presencial"><div class="form-group col-sm-3 col-md-3 col-lg-3"><label for="CentroCustoId">Centro de custo</label><ul id="ul-CentroCustoId" class="token-input-list"><li class="token-input-input-token"><input type="text" class="form-control-table" placeholder="Digite para buscar" autocomplete="off" id="token-input-CentroCustoId" style="outline: none;"><tester style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 14px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-weight: 400; letter-spacing: normal; white-space: nowrap;"></tester></li></ul><input name="data[Pedido][centro_custo_id]" id="CentroCustoId" class="form-control" autocomplete="off" type="text" style="display: none;"></div><input type="hidden" name="data[Pedido][nome_centro_custo]" id="NomeCentroCusto" autocomplete="off">    </fieldset>
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
</body>
</html>