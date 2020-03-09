<?php
	session_start();
	$c = $_POST['local'];
	$c = (string) $c;
	$a = $_POST['alternativa'];
	$b = $_POST['correta'];
	$d = 'Location: ../index.php#'. $c;
	echo $d;
	
	if($a == $b){
		
		$_SESSION['correta'] = true;
		header("{$d}");
	}
	else{
		$_SESSION['correta'] = false;
		header("{$d}");
	}
	$_SESSION['questao'] = $c;
?>
