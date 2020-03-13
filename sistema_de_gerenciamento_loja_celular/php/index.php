<?php

include_once "autentica_pagina.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
    <title>Inicio</title>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/indexcss.css">
    <script src="https://kit.fontawesome.com/f8802530fc.js" crossorigin="anonymous"></script>
</head>
<body>

  
    <div class="fixed-top">
        <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-12">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a class="waves-effect waves-dark" target="_blank" href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="../includes/logoff.php"><i class="fas fa-sign-out-alt">sair</i></a></li>
                          
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        
    </div>
    <div class="row meio">
      <div class="coluna coluna-2 menu " >
          <div class="nav-side-menu">
              <div class="brand"><img src="../img/logoWF.png"></div>
              <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content" style="color: #210268; background-color: #cccc"></i>
            
                  <div class="menu-list">
            
                      <ul id="menu-content" class="menu-content collapse out">
                         
                            <li>
                              <a href="clientes.php">
                              <i class="fa fa-users fa-lg"></i> Clientes
                              </a>
                            </li>

                          <li>
                          <li data-toggle="collapse" data-target="#service" class="collapsed">
                              <a href="#"><i class="fa fa-wrench"></i> Services <span class="arrow"></span></a>
                          </li>  
                          <ul class="sub-menu collapse" id="service">
                            <li>
                                <a href="servicos.php"></i>Gerenciar Serviços</a>
                            </li>    
                          </ul>


                          <li data-toggle="collapse" data-target="#new" class="collapsed">
                              <a href="#"><i class="fas fa-tools"></i> Ordens de Serviços <span class="arrow"></span></a>
                          </li>
                          <ul class="sub-menu collapse" id="new">
                            <li><a href="ordemServico.php">Gerenciar<abbr title="ordem de serviço"> OS</abbr></a></li>
                            
                          </ul>

                          <li data-toggle="collapse" data-target="#financas" class="collapsed">
                            <a href="#"><i class="fas fa-hand-holding-usd"></i> Finanças <span class="arrow"></span></a>
                          </li>
                        <ul class="sub-menu collapse" id="financas">
                          <li><a href="vendas.php"> Gerenciar Vendas da loja</a></li>
                          <li><a href="gastos.php"> Gerenciar Compras da loja</a></li>
                          
                        </ul>  

                        <li data-toggle="collapse" data-target="#relatorios" class="collapsed">
                            <a href="#"><i class="far fa-chart-bar"></i> Relatórios <span class="arrow"></span></a>
                          </li>
                        <ul class="sub-menu collapse" id="relatorios">
                          <li><a href="lucros.php"> Relatórios de  Lucros</a></li>
                          <li><a href="gastos.php"> Relatórios de  Gastos</a></li>
                          
                        </ul> 

                      </ul>
              </div>
            </div>

      </div>
      <div class="coluna coluna-2 conteudo" >
        <div class="row">
            <div class="coluna coluna-2 grafico" >
                <div class="card bg-gradient-default shadow">
                    <h4 style="text-align: center">Lucros da semana</h4>
                    <canvas class="line-chart" id="line-chart"></canvas>
                </div>
            </div>
            <div class="coluna coluna-2 grafico" >
                <div class="card bg-gradient-default shadow">
                    <h4 style="text-align: center">Gastos da semana</h4>
                    <canvas class="line-chart" id="chart2" ></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="coluna">
                <div class="card bg-gradient-default shadow">
                    <div class="col" >
                            <h3 class="mb-0"><em>Ultimas ordens de serviços</em></h3>
                    </div>
                    <div class="col text-right" style="padding: 5px">
                            <a href="clientes.html" class="btn btn-sm btn-primary">Ver todos</a>
                    </div>
                    <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col">Nome</th>
                                  <th scope="col">Telefone</th>
                                  <th scope="col">Data cadastro</th>
                                  <th scope="col">Ativo</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">
                                    nome
                                  </th>
                                  <td>
                                    (xx)xxxx-xxxx
                                  </td>
                                  <td>
                                    2019
                                  </td>
                                  <td>
                                    <i class="fas fa-check text-success mr-3"></i> 
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">
                                    nome
                                  </th>
                                  <td>
                                    (xx)xxxx-xxxx
                                  </td>
                                  <td>
                                    2019
                                  </td>
                                  <td>
                                    <i class="fas fa-check text-success mr-3"></i> 
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">
                                    nome
                                  </th>
                                  <td>
                                    (xx)xxxx-xxxx
                                  </td>
                                  <td>
                                     2019
                                  </td>
                                  <td>
                                    <i class="fas fa-times text-danger mr-3"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">
                                    nome
                                  </th>
                                  <td>
                                    (xx)xxxx-xxxx
                                  </td>
                                  <td>
                                    2019
                                  </td>
                                  <td>
                                    <i class="fas fa-check text-success mr-3"></i> 
                                  </td>
                                </tr>
                               
                              </tbody>
                            </table>
                          </div>
                </div>
            </div>
        </div>
        
      </div>

     


      </div>
        
       
      
  

      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <script>

        var ctx = document.getElementById("line-chart");
        var ctx2 = document.getElementById("chart2");
        //Type,Data e Optinos(tipo do gráfico,dados observados)
        var chartGraph = new Chart(ctx,{
          type: 'bar',
          data:{
              labels:["Seg","Ter","Qua","Qui","Sex","Sáb"],
              datasets:[{
                  label: "TAXA DE LUCROS ",
                  data:[32,5,10,8,5,1,3],
                  borderWidth:3,
                  borderColor: [ '#ff6384','#36a2eb','#cc65fe', '#ffce56','#ff8e07','#d6300d8f'],
                  
                 backgroundColor: [ '#ff6384a1','#36a2eb96','#cc65fe9c', '#f0c74dc2','#ff8e079e','#d6300d8f']
                     
                 

              }]
          }
         
        } );
        var chartGraph2 = new Chart(ctx2,{
          type: 'line',
          data:{
              labels:["Seg","Ter","Qua","Qui","Sex","Sáb"],
              datasets:[{
                  label: "TAXA DE GASTOS ",
                  data:[32,5,10,8,40,1,3],
                  borderWidth:3,
                  borderColor: "#da091d",
                  backgroundColor:  '#da091d80'

              }]
          }
         
        } );
      </script>
</body>
