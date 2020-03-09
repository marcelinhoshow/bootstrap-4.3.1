<?php
    if(isset($_SESSION['correta'])){
        if($_SESSION['correta'] == true){
            echo '<p><label>Correto!</label></p>';
        }
        else if($_SESSION['correta'] == false){
            echo '<p><label>Incorreto!</label></p>';
        }
        else{
            echo '<p><label>Resposta em branco!</label></p>';
        }
        unset($_SESSION['correta']);
    }
?>
