<?php
	define('HOST', 'localhost');
	define('USUARIO', 'root');
	define('SENHA','');
	define('DB', 'tcc_vestibulize');
	$conexao = mysqli_connect(HOST,USUARIO,SENHA, DB) or die("Não foi possível conectar");
?>