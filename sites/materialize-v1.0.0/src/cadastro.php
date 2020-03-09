<?php
	session_start();
	include('conexao.php');
	if(empty($_POST['usu_email1']) || empty($_POST['usu_senha1']) || empty($_POST['name'])){
		$_SESSION['blankcamp'] = true;
		header('Location: ../index.php');
		exit();	
	}
	$email = mysqli_real_escape_string($conexao,$_POST['usu_email1']);
	$senha = mysqli_real_escape_string($conexao,$_POST['usu_senha1']);
	$nome = mysqli_real_escape_string($conexao,$_POST['name']);
	$query_verificacao = "select * from usuarios where `usu_email` = '{$email}';";
	$result_verificacao = mysqli_query($conexao,$query_verificacao);
	$row_verificacao = mysqli_num_rows($result_verificacao);
	
	if($row_verificacao == 0){
		$query = "insert into usuarios (usu_nome, usu_email, usu_senha, usu_acesso) values ('{$nome}', '{$email}', md5('{$senha}'), DEFAULT);";
		$result = mysqli_query($conexao,$query);
		$_SESSION['autenticado'] = $nome;
		header('Location: ../index.php');
		exit();
	}
	else{
		$_SESSION['blankcamp'] = true;
		header('Location: ../index.php');
		exit();
	}
?>