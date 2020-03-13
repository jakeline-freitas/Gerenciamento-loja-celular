<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$valor = mysqli_escape_string($connect, $_POST['valor_servico']);
	$observacoes = mysqli_escape_string($connect, $_POST['observacoes']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE servicos SET nome = '$nome', valor= '$valor', descricao = '$observacoes' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../php/servicos.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../php/servicos.php');
	endif;
endif;