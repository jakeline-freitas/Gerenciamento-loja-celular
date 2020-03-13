<?php
    session_start();
    $login = $_POST["nome"];
    $senha = $_POST["senha"];

    if($login == "walyson" && $senha == "123"){
        $_SESSION["autenticado"] = true;
        header("Location: index.php");
    } else{
        header("Location: login.php?erro=login");
    }
?>