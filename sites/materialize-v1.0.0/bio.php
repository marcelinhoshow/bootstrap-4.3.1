<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Vestibulize</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    
    <style>
    html, body {
    height: 100%;
    margin: 0;
    }
    .footer,
    .push {
    height: 0%;
    }
    </style>
    
  </head>
  <body>
 <!-- Navbar -->
    <nav id="nav">
      <div class="nav-wrapper teal accent-4">       
        <ul id="nav-mobile" class="right">
          <?php if(empty($_SESSION['autenticado'])):;?>
          <li><a href="#modal1" class="modal-trigger">Entrar</a></li>
          <li><a href="#modal2" class="modal-trigger">Cadastrar</a></li>
        <?php else: echo "<li><a>{$_SESSION['autenticado']}</a></li><li><a href='src/logout.php'>Sair</a></li>";
        endif;?>
         <li><a href="sobre.php">Sobre</a></li>  
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        <ul id="slide-out" class="sidenav">
        <li><a href="index.php"><h4 align="center">Vestibulize</h4></a></li>
        <li><div class="divider"></div></li>

        <!--
        <?php if(isset($_SESSION['autenticado'])):;?>
        <li><a href="src/questoes"><h5>Inserir Questões</h5></a></li><li><div class="divider"></div></li>
      <?php endif;?>-->
        
        <li><a><h5>Matérias</h5></a></li>
        <li><div class="divider"></div></li>
        <li><a href="port.php">Português</a></li>
        <li><a href="mat.php">Matemática</a></li>
        <li><a href="hist.php">História</a></li>
        <li><a href="geo.php">Geografia</a></li>
        <li><a href="bio.php">Biologia</a></li>
        </ul>

  
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">  
                        <div class="row">
                            <form action="src/login.php" method="post">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input placeholder="" id="usu_email" name="usu_email" type="email" class="validate">
                                    <label for="usu_email">E-Mail</label>
                                </div> 
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input placeholder="" id="usu_senha" name="usu_senha" type="password" class="validate">
                                    <label for="usu_senha">Senha</label>
                                </div>  
                                <div>
                                    <center>
                                    <?php if(!empty($_SESSION['invalido'])):;?>
                                    <label>Campos inválidos ou usuário não cadastrado</label></br>
                                    <?php endif;
                                    $_SESSION['invalido'] = false;?>
                                    <button type="submit" class="waves-effect waves-light btn red"><i class="material-icons right">arrow_forward</i>Enviar</button>
                                    </center>
                                </div>                             
                            </form>                          
                        </div>                        
      </div>
    </div>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <div class="row">
                            <form action="src/cadastro.php" method="post">                                                 
                                <div class="input-field col s12">

                                    <i class="material-icons prefix">assignment_ind</i>
                                    <input placeholder="" id="name" name="name" type="text" class="validate">                                   
                                    <label for="nome">Usuário</label>
                                </div>                             
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input placeholder="" id="usu_email1" name="usu_email1" type="email" class="validate">
                                    <label for="usu_email1">E-mail</label>
                                </div> 
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input placeholder="" id="usu_senha1" name="usu_senha1" type="password" class="validate">
                                    <label for="usu_senha1">Senha</label>
                                </div>  
                                <div>
                                    <center>
                                    <?php if(!empty($_SESSION['blankcamp'])):;?>
                                    <label>Campos inválidos ou usuário já cadastrado</label></br>
                                    <?php endif;
                                    $_SESSION['blankcamp'] = false;?>
                                    <button type="submit" class="waves-effect waves-light btn red"><i class="material-icons right">arrow_forward</i>Enviar</button></center>
                                </div>                             
                            </form>                          
                        </div>
    </div>
  </div>

    <div><h2 align="center">Biologia</h2></div>
    <div class="container" id="cardanswer">
      <?php include('src/perg_bio.php');?>
    </div>

    


<div class="fixed-action-btn">
  <a class="btn-floating btn-large teal accent-4">
    <i class="large material-icons">mode_edit</i>
  </a>
</div>
      
<!-- Footer -->
  <div class="wrapper">
  </div>
  <div class="push">
  </div>
  <footer class="page-footer teal" id="footer1">
    <div class="container" id="footer">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2018 Vestibulize
        <a class="grey-text text-lighten-4 right" href="#!"></a>
      </div>
    </div></footer>
    <!-- Footer -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      M.AutoInit();
      </script>
    </body>
  </html>