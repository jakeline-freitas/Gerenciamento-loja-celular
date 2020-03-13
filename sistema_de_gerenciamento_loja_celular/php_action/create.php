<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$valor = clear($_POST['valor_servico']);
	$descricao = clear($_POST['observacoes']);
	

	$sql = "INSERT INTO servicos (nome, valor, descricao, status ) VALUES ('$nome', '$valor', '$descricao', 1) ";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../php/servicos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location:  ../php/servicos.php');
	endif;
endif;