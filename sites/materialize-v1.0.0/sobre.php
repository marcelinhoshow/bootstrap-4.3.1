<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Vestibulize</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>


    <style type="text/css">
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
      	  <a href="index.php" class="brand-logo"><i style="margin-left: 30%" class="material-icons">arrow_back</i>
        <ul id="nav-mobile" class="right">
          <?php if(empty($_SESSION['autenticado'])):;?>
          <li><a href="#modal1" class="modal-trigger">Entrar</a></li>
          <li><a href="#modal2" class="modal-trigger">Cadastrar</a></li>
          <?php else: echo "<li><a>{$_SESSION['autenticado']}</a></li><li><a href='src/logout.php'>Sair</a></li>";
          endif;?>
          <li><a href="sobre.php">Sobre</a></li>
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

    <br>

    <div class="container" align="center">
	 <a href="index.php"><img class="responsive-img" width="300" height="300" src="img/logo.png" alt=""></a>
     <!--<a href="index.php"><img class="responsive-img" width="250" height="250" src="img/chapeu.gif" alt=""></a>-->
     <!--<a href="index.php"><img class="responsive-img" width="300" height="300" src="img/diploma.gif" alt=""></a>
     <!--<a href="index.php"><img class="responsive-img" width="300" height="300" src="img/logo.png" alt=""></a>-->
</div>
    
    <!-- Cards Structure -->
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed circle responsive-img" src="img/profile/igor.jpg">
              <span class="card-title">Igor</span>
              <!--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
            </div>
            <div class="card-content">
              <p>Database Administrator</p>
            </div>
          </div>
        </div>

        <!-- Cards Structure -->
        <div class="col s12 m12 l4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" class="responsive-img" src="img/profile/leonardo.jpg">
              <span class="card-title">Leonardo</span>
              <!--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
            </div>
            <div class="card-content">
              <p>Documentador</p>
            </div>
          </div>
        </div>
        
        <!-- Cards Structure -->
        <div class="col s12 m12 l4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" class="responsive-img" src="img/profile/marcelo.jpg">
              <span class="card-title">Marcelo</span>
              <!--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
            </div>
            <div class="card-content">
              <p>Front-End Developer</p>
            </div>
          </div>
        </div>

        <!-- Cards Structure -->
        <div class="col s12 m12 l4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" class="responsive-img" src="img/profile/roberto.jpg">
              <span class="card-title">Roberto</span>
              <!--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
            </div>
            <div class="card-content">
              <p>Back-End Developer</p>
            </div>
          </div>
        </div>
        
        <!-- Cards Structure -->
        <div class="col s12 m12 l4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" class="responsive-img" src="img/profile/vinicius.jpeg">
              <span class="card-title">Vinicius</span>
              <!--<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
            </div>
            <div class="card-content">
              <p>Developer Full Stack</p>
            </div>
          </div>
        </div>
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
      M.AutoInit();
      </script>
      <script type="text/javascript">
      
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
      });
      // Or with jQuery
      $(document).ready(function(){
      $('.materialboxed').materialbox();
      });
      </script>
      
    </body>
  </html>