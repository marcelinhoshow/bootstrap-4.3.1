<?php

include('conexao.php');
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d ');

$perg_ano = $_POST['perg_ano'];
$perg_vestibular = $_POST['perg_vestibular'];
$perg_materia = $_POST['perg_materia'];
$perg_conteudo = $_POST['perg_conteudo'];
$perg_data = $date;
$perg_alternativacorreta = $_POST['resp_alternativa'];

$sql = "insert into perguntas (perg_ano, perg_vestibular, perg_materia, perg_conteudo, perg_data, perg_alternativacorreta) values ('$perg_ano', '$perg_vestibular','$perg_materia','$perg_conteudo','$perg_data','$perg_alternativacorreta')";

mysqli_query($conexao,$sql) or die (mysqli_error($conexao));

$sql1 = "select * from perguntas where perg_conteudo='$perg_conteudo'";
$result = mysqli_query($conexao,$sql1) or die (mysqli_error($conexao));
$conteudo = mysqli_fetch_array($result);
$linhas =  mysqli_num_rows($result);
$role = $conteudo['perg_cod'];

$resp_conteudo1 = $_POST['resp_conteudo1'];
$resp_conteudo2 = $_POST['resp_conteudo2'];
$resp_conteudo3 = $_POST['resp_conteudo3'];
$resp_conteudo4 = $_POST['resp_conteudo4'];
$resp_conteudo5 = $_POST['resp_conteudo5'];

$sql2 = "insert into respostas (resp_conteudo, resp_resposta, resp_pergcod) values ('$resp_conteudo1','a)','$role'),('$resp_conteudo2','b)','$role'),('$resp_conteudo3','c)','$role'),('$resp_conteudo4','d)','$role'),('$resp_conteudo5','e)','$role')";
mysqli_query($conexao,$sql2) or die (mysqli_error($conexao));

?>