<?php
		include('conexao.php');
		$id_pergunta = 1;
		$query = 'select * from perguntas where perg_materia="Matematica"';
		$result= mysqli_query($conexao,$query);
		$total = mysqli_num_rows($result);
		

		
		while($conteudo = mysqli_fetch_array($result)){
		$pergunta = utf8_encode($conteudo['perg_conteudo']);
		$correta = $conteudo['perg_alternativacorreta'];
		$id_pergunta = $conteudo['perg_cod'];
		$ano = $conteudo['perg_ano'];
		$vestibular = $conteudo['perg_vestibular'];
		echo '<div class="container" align="justify">
		<div id=',"{$id_pergunta}",' class="row"">
		<div class="">
		<h2>',"{$vestibular} - {$ano}",'</h2>
			<div class="card horizontal">
				<div class="card-content">
					<p>',"{$pergunta}",'</p>
				</div>
			<div class="card-action">													
			</div>
			</div>
			<ul class="collapsible">	    
	   			 <li>
	      <div class="collapsible-header"><i class="material-icons">import_contacts</i>Resposta</div>
	      <div class="collapsible-body"><form action="src/verificaresposta.php" method="post">';
		$query2 = "select * from respostas where resp_pergcod={$id_pergunta}";
	$result2= mysqli_query($conexao,$query2);
	$id = 1;
	while($conteudo2 = mysqli_fetch_array($result2)){
		$pergunta = utf8_encode($conteudo2['resp_conteudo']);
		if($id == 1){
			echo '<p><label><input name="alternativa" value="a)" type="radio"/><span>',"a) {$pergunta}",'</span></label></p>';
		}
		else if($id == 2){
			echo '<p><label><input name="alternativa" value="b)" type="radio"/><span>',"b) {$pergunta}",'</span></label></p>';
		}
		else if($id == 3){
			echo '<p><label><input name="alternativa" value="c)" type="radio"/><span>',"c) {$pergunta}",'</span></label></p>';
		}
		else if($id == 4){
			echo '<p><label><input name="alternativa" value="d)" type="radio"/><span>',"d) {$pergunta}",'</span></label></p>';
		}
		else if($id == 5){
			echo '<p><label><input name="alternativa" value="e)" type="radio"/><span>',"e) {$pergunta}",'</span></label></p>';
		}
		
		$id++;
	}
	;
	include('teste.php');
	echo '<p><label><input style="visibility: hidden;" type="checkbox" name ="correta" value=',"{$correta}",' checked="checked"/></label></p>';
	echo '<p><label><input style="visibility: hidden;" type="checkbox" name ="local" value=',"{$id_pergunta}",' checked="checked"/></label></p>';
	echo '<button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">arrow_forward</i>Responder</button></form></div>
	    </li>
	  </ul>
			</div>
		</div>
		</div>';
	
	}
?>
