<?php
require 'config.php'; //variaveis de conexão do banco de dados
include 'errors.php'; //variaveis de conexão do banco de dados
	try {
		$conexao = new PDO("mysql:host=$dbserver;dbname=$dbbanco", $dbuser, $dbsenha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'Conexão realizada com sucesso';
	} catch(PDOException $e) {
	echo 'Erro ao realizar conexao: ' . $e->getMessage();
	}
	return $conexao;
?>