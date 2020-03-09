<?php
	//Incluindo a conexão com banco de dados.
	include 'conexao.php';
	//Incluindo um leitor de erros do PHP.
	include 'errors.php';
		session_start();
	return $conexao;

$email=$_POST['email'];
$senha=$_POST['senha'];

// Preparando statement
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usu_email = ? && usu_senha = ?");
$stmt->bind_param(1, $email, PDO::PARAM_STR);
$stmt->bind_param(2, $senha, PDO::PARAM_STR);
// Executando statement
$stmt->execute();
// Obter linha consultada
$obj = $stmt->fetchObject();
// Se a linha existe: indicar que esta logado e encaminhar para outro lugar
if ($obj) {
$_SESSION['email'] = $_POST['email'];
header('Location: www.sistlab.com.br');
} else {
echo '<p class="erro">Login/Senha inv&aacute;lidos</p>';
}
?>