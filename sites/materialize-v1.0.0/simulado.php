<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simulado</title>
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
          <li><a href="#nav"><h4 align="center">Vestibulize</h4></a></li>
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
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
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
    $(document).ready(function(){
    $('#modal').modal();
    $('#modal').modal('open'); 
     });
   </script>

    </body>
  </html>