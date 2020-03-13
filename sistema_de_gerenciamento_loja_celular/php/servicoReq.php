<?php

include_once '../php_action/db_connect.php';

     $produto = $_POST["s"];

     $sql = "SELECT * FROM servicos WHERE id = '$produto'";
     $resultado = mysqli_query($connect,$sql);
     $linha = mysqli_fetch_assoc($resultado);
   
     echo json_encode($linha);
    //  echo print_r($resultado->fetch_all());
    //  while ( $val = $resultado->fetch_object() )
    // {
    //     echo print_r($val);
    // }
    

?>