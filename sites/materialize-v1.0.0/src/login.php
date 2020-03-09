<?php
	session_start();
	include('conexao.php');
	if(empty($_POST['usu_email']) || empty($_POST['usu_senha'])){
		$_SESSION['invalido'] = true;
		header('Location: ../index.php');
		exit();	
	}

	$email = mysqli_real_escape_string($conexao,$_POST['usu_email']);
	$senha = md5(mysqli_real_escape_string($conexao,$_POST['usu_senha']));
	$query = "select `usu_email`, `usu_senha` from usuarios where `usu_email`='{$email}' and `usu_senha` = '{$senha}'";
	$result = mysqli_query($conexao,$query);
	$row = mysqli_num_rows($result);

	$querynome = "select `usu_nome` from usuarios where `usu_email`='{$email}'";
	$resultnome = mysqli_query($conexao,$querynome);
	$dadosnome = mysqli_fetch_array($resultnome);
	$nome = $dadosnome['usu_nome'];
	
	if($row == 1){
		$_SESSION['autenticado'] = $nome;
		header('Location: ../index.php');
	}
	else{
		$_SESSION['invalido'] = true;
        header('Location: ../index.php');
	}
?>
	