<?php
    session_start();
    // print_r($_SESSION);
    $erroLogin = false;
    if (isset($_GET["erro"]) && $_GET["erro"] == "login") {
        $erroLogin = true;
    }

    $erroAutenticacao = false;
    if (isset($_GET["erro"]) && $_GET["erro"] == "autenticacao") {
        $erroAutenticacao = true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/logoWF.png" type="image/x-icon" />
        <title>Home - Wfcell</title>
           
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/meuLogin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <div class="corpo">
            <div id="logo-wf" >
                <img src="../img/logoWF.png" id="img">
            </div>
            <div class="conteudo ">
                        
                <div id="formulario">
                    <form action ='valida_login.php' method='POST' id="form" >
                        <div class="form-group">
                            
                                    <input type="text" class="form-control" placeholder=" &#xf007 Usuário" name="nome" id="txt-nome" required>
                                    
                            
                        </div><br />
                        <div class="form-group">
                            
                                    <input type="password" class="form-control" placeholder="&#xf023 Senha" name="senha" id="txt-senha" required>
                            
                        </div><br />
                        <div id="login" class="form-group">
                            
                                <button type="submit" class="btn form-control" id="btn-login">Login</button>
                            
                        </div>

                    <?php
                        if($erroLogin == true){
                            echo "<p style='color:red'>Erro no login</p>";
                        } else{
                            if($erroAutenticacao == true){
                                echo "<p style='color:red'>Efetue o login primeiro.</p>";
                            }
                        }
                    ?>
                    </form>
                    <p id="mensagem"></p>
                </div>
                    
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    </body>
</html>