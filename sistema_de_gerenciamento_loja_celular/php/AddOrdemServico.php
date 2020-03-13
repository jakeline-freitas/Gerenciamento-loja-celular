<?php

include_once "../includes/menu.php";
include_once "autentica_pagina.php";
include_once '../php_action/db_connect.php';

?>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Adicionar Ordem de Serviços</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/adicionarservico.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
   
</head>

<body>

<div class="row meio">
        <div class="tab-content responsive container">
            <section class="content-header">
                <h2> Adicionar Ordem de Serviços</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"> <i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="breadcrumb-item"><a href="ordemServico.php">Ordem de Serviços</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
                    </ol>
                </nav>
            </section>
            <div class="row linhaFormulario">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <form  method="POST" >
                        <div class="tab-pane active border p-3" id="dados gerais">
                        <p class="col-sm-12 col-lg-12 col-md-12 "><i class="fa fa-list-alt margin-right-5px"></i><b> Dados gerais</b></p>
                            <div class="row">
                                <div class="form-group col-sm-4 col-md-4 col-lg-4  required ">
                                    <label for="nomeCliente">Nome do cliente</label>
                                    <input name="nomeCliente" class="form-control error" maxlength="250" autocomplete="off"
                                        type="text" id="nomeCliente" required>
                                </div>

                                <div class=" required form-group col-sm-3 col-md-3 col-lg-3">
                                <label for="DT_oredem_Servico">Data de entrada</label>
                                    <input name="data_entrada"  class="datepicker form-control valid"
                                        autocomplete="off" type="text" id="DT_oredem_Servico" placeholder=""  required>
                                </div>
                                <div class=" required form-group col-sm-3 col-md-3 col-lg-3">
                                <label for="OS_contato">Contato</label>
                                    <input name="contato_os"  class="mascara-valor form-control valid"
                                        autocomplete="off" type="text" id="OS_contato" placeholder=""  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4 col-md-4 col-lg-4 required ">
                                    <label for="Responsavel_Nome">Responsavél pelo serviço</label>
                                    <input name="nome_responsavel" class="form-control error" maxlength="250" autocomplete="off"
                                        type="text" id="Responsavel_Nome" required>
                                </div>
                                <div class="  form-group col-sm-3 col-md-3 col-lg-3">
                                <label for="DTS_oredem_Servico">Data de saída</label>
                                    <input name="data_saida"  class="datepicker form-control valid"
                                        autocomplete="off" type="text" id="DTS_oredem_Servico" placeholder=""  required>
                                </div>
                                <div class=" required form-group col-sm-3 col-md-3 col-lg-3">
                                <label for="OS_situacao">Situação</label>
                                    <input name="situacao_os"  class="mascara-valor form-control valid"
                                        autocomplete="off" type="text" id="OS_situacao" placeholder=""  required>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12"><label
                                        for="ProdutoObservacoes">Responsavél</label><textarea name="observacoes"
                                        class="form-control valid" autocomplete="off" cols="30" rows="6"
                                        id="ProdutoObservacoes"></textarea>
                                </div>
                            </div> -->
                           
                            <!-- <div class="row p-3">
                                <div class="both col-sm-12 col-lg-12 col-md-12 margin-top-10px">
                                    <button class="btn btn-success btn-responsive" name="btn-cadastrar" type="submit" id="btnCadastrar"><i
                                            class="fas fa-check"></i> Cadastrar</button>
                                    <a href="servicos.php" class="btn btn-danger btn-responsive">
                                        <i class="fas fa-times"></i> Cancelar</a>
                                </div>
                            </div> -->


                        </div><br/>
                        <div class="tab-pane active border p-3" id="dados_equipamento">
                        <p class="col-sm-12 col-lg-12 col-md-12 margin-top-20px"><i class="fas fa-people-carry"></i><b> Equipamento</b></p>
                            <div class="row ">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="required form-group  col-sm-12 col-md-12 col-lg-12">
                                            <label for="OS_equipamento">Equipamento</label>
                                            <input name="equipamento_os"  class="mascara-valor form-control valid"
                                                autocomplete="off" type="text" id="OS_equipamento" placeholder=""  required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class=" form-group col-sm-12 col-md-12 col-lg-12">
                                            <label for="OS_defeito">Defeito</label>
                                            <textarea name="defeito_os"
                                                class="form-control valid" autocomplete="off" cols="30" rows="6"
                                                id="OS_defeito"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class=" col-sm-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class=" required form-group col-sm-6 col-md-6 col-lg-6">
                                        <label for="OS_marcaAparelho">Marca</label>
                                            <input name="marcaEparelho_os"  class="mascara-valor form-control valid"
                                                autocomplete="off" type="text" id="OS_marcaAparelho" placeholder=""  required>
                                        </div>
                                        <div class=" required form-group col-sm-6 col-md-6 col-lg-6">
                                        <label for="OS_modeloAparelho">Modelo</label>
                                            <input name="modeloAparelho_os"  class="mascara-valor form-control valid"
                                                autocomplete="off" type="text" id="OS_modeloAparelho" placeholder=""  required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label for="OS_solucao">Solução</label>
                                            <textarea name="solucao_os"
                                                class="form-control valid" autocomplete="off" cols="30" rows="6"
                                                id="OS_solucao"></textarea>
                                        </div>
                                    </div>
                                 
                                </div>
                                
                            </div>

                        </div>
                        <br/>
                        <div class="tab-pane active border p-3 formPeca" id="dados_equipamento">
                            <div class="row " style='height:30px'>
                                
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                        <label for="nomePeca">Peça</label>
                                        <!-- <input name="peca_os" class="form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="nomePeca" required> -->
                                    </div>
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                        <label for="qtdPeca">Quantidade</label>
                                        <!-- <input name="peca_os" class="form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="nomePeca" required> -->
                                    </div>
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                        <label for="totalPeca">Subtotal</label>
                                        <!-- <input name="peca_os" class="form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="nomePeca" required placeholder="0,00"> -->
                                    </div>
                                </div>
                                <br/>
                            </div><br/><br/>
                           
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                        
                                            <button class="btn btn-responsive light" name="btn-addPeca" type="button" id="btnAdicionarPeca" style="background-color:#210268;color:white">
                                            <i class="fas fa-plus"></i> Adicionar peça</button>
                                        
                              
                                </div><br/>
                            <div class="tab-pane active border p-3 formServ" >
                            <p><i class="fas fa-wrench"></i><b> Serviços</b></p>
                                <div class="row " id="linha1">
                                
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4 required">
                                    
                                        <label for="nomeServico">Serviço</label>
                                        <select class='form-control Servico' name='servico_os' id='nomeServico' required="required">
                                            <option value='-1'>Selecione um serviço</option>
                                            <?php
                                            
                                            $sql = "SELECT * FROM servicos WHERE status = 1";
                                            $resultado = mysqli_query($connect,$sql);

                                            while($dados = mysqli_fetch_assoc($resultado)){
                                                echo '<option value="'. $dados['id'].'"  >' .$dados['nome'].'</option>';
                                            }

                                            ?>
                                        
                                        </select>
                                        <!-- <input name="servico_os" class="form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="nomeServico" required> -->
                                    </div>
                                    <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                        <label for="detalhes_servico">Detalhes</label>
                                        <input name="detalhe_os" class="form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="detalhes_servico" required value=''>
                                    </div>
                                    <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                        <label for="subtotal_servico">Subtotal</label>
                                        <input name="subtotal_servico_os" class="dinheiro form-control error" maxlength="250" autocomplete="off"
                                            type="text" id="subtotal_servico" required placeholder="0,00" value=''>
                                    </div>
                                </div>
                                <br/>
                            </div><br/>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                        
                                        <button class="btn btn-responsive light" name="btn-addservico" type="button" id="btnAdicionar_servico" style="background-color:#210268;color:white">
                                        <i class="fas fa-plus"></i> Adicionar Serviço</button>
                                    
                          
                            </div><br/>
                             <div class="row p-3">
                                <div class="both col-sm-12 col-lg-12 col-md-12 margin-top-10px">
                                    <button class="btn btn-success btn-responsive" name="btn-cadastrar" type="submit" id="btnCadastrar"><i
                                            class="fas fa-check"></i> Cadastrar</button>
                                    <a href="ordemServico.php" class="btn btn-danger btn-responsive">
                                        <i class="fas fa-times"></i> Cancelar</a>
                                </div>
                            </div>
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            var contLinhaPeca = 0;
            var contidPeca = 0;
            var contLinhaServico = 1;


            remove = function(item) {
                var div = $(item).closest('div');	
                //$(div).siblings('br').remove();
                div.remove();    	
                
            }
            //https://api.jquery.com/click/
            $("#btnAdicionarPeca").click(function () {
				//https://api.jquery.com/append/
                $(".formPeca").append(
                    ' <div class="row" id=" linha' + ++contLinhaPeca +'" > <div class="form-group col-sm-4 col-md-4 col-lg-4"> <input name="peca_os" class="form-control error" maxlength="250" autocomplete="off" type="text" id="nomePeca" > </div><div class="form-group col-sm-3 col-md-3 col-lg-3"><input name="qtdpeca_os" class="form-control error" maxlength="250" autocomplete="off" type="text" id="qtdPeca" required></div><div class="form-group col-sm-3 col-md-3 col-lg-3"><input name="subtotal_peca_os" class="form-control error" maxlength="250" autocomplete="off" type="text" id="totalPeca" required placeholder="0,00"></div><button class="remove-equipamento btn btn-danger excluir" id="btn-remover" type="button" style="height:30px" onclick="remove(this)"><i class="fas fa-times"></i></button></div>');
            });
            $("#btnAdicionar_servico").click(function () {
				//https://api.jquery.com/append/
                $(".formServ").append(
                    ' <div class="row" id="linha'+ ++contLinhaServico +'" > <div class="form-group col-sm-4 col-md-4 col-lg-4">  <select class="form-control Servicos" id="nomeServicos" name="nomeServicos"> <option></option> </select> </div><div class="form-group col-sm-4 col-md-4 col-lg-4"><input name="detalhe_os" class="form-control " maxlength="250" autocomplete="off" type="text" id="detalhes_servico" required></div><div class="form-group col-sm-3 col-md-3 col-lg-3"><input name="subtotal_peca_os" class="form-control" maxlength="250" autocomplete="off" type="text" id="totalPeca" required placeholder="0,00"></div><button class="remove-equipamento btn btn-danger excluir" id="btn-remover" type="button" style="height:30px" onclick="remove(this)"><i class="fas fa-times"></i></button></div>');
            });

            $( "input.datepicker" ).datepicker({
                    dateFormat: "yy-mm-dd",
                    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
            });
            //$("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
            $(".Servico").on("change", function() {
                var servico = $("#nomeServico").val();
                var descricao = $("#detalhes_servico").val();
                

                $.ajax({
                    method: "POST",
                    url:"servicoReq.php",
                    data:{
                        s: servico 
                    }
                })
                .done(function(resposta){ 
                    $("#subtotal_servico").val((JSON.parse(resposta)).valor);
                    $("#detalhes_servico").val((JSON.parse(resposta)).descricao);
                    

                    console.log((JSON.parse(resposta)).valor);
                });
            })

           
            

        });
            
            
        </script>
 <!-- <br/><div class="row" style="height:30px"> <div class="form-group col-sm-4 col-md-4 col-lg-4"><input name="peca_os" class="form-control-table error" maxlength="250" autocomplete="off" type="text" id="nomePeca" > </div><div class="form-group col-sm-4 col-md-4 col-lg-4"><input name="peca_os" class="form-control error" maxlength="250" autocomplete="off" type="text" id="nomePeca" required></div><div class="form-group col-sm-4 col-md-4 col-lg-4"><input name="subtotal_servico_os" class="form-control error" maxlength="250" autocomplete="off" type="text" id="subtotal_servico" required placeholder="0,00"></div></div></div>' -->

</body>
</html>
