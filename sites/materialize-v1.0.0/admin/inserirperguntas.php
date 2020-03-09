<?php
  session_start();
  if(isset($_SESSION['autenticado'])){
  }
  else{
    header('Location: erro.php');
  }
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Inserir respostas</title>
      <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    
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

          <nav>
        <div class="nav-wrapper teal accent-4">                       
            <a href="#" class="brand-logo"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
            <ul id="slide-out" class="sidenav">
                <li><a><h4 align="center">Vestibulize</h4></a></li>
                <li><div class="divider"></div></li>
                <?php if(isset($_SESSION['autenticado'])):;?>
                <li><a href="src/questoes"><h5>Inserir Questões</h5></a></li><li><div class="divider"></div></li>
                <?php endif;?>        
                <li><a><h5>Matérias</h5></a></li>
                <li><div class="divider"></div></li>
                <li><a>Português</a></li>
                <li><a>Matemática</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

  <div class="container" align="center">
 <div class="row">
    <form class="col s12" method="POST" action="../src/inserir.php">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="perg_conteudo" name="perg_conteudo" type="text" class="validate">
          <label for="first_name">Pergunta:</label>
        </div>
            <div class="input-field col s12">
          <input placeholder="" id="perg_ano" name="perg_ano" type="text" class="validate">
          <label for="first_name">Ano:</label>
        </div>
            <div class="input-field col s12">
          <input placeholder="" id="perg_materia" name="perg_materia" type="text" class="validate">
          <label for="first_name">Materia:</label>
        </div>
            <div class="input-field col s12">
          <input placeholder="" id="perg_vestibular" name="perg_vestibular" type="text" class="validate">
          <label for="first_name">Vestibular:</label>
        </div>
            <p>
      <label>
        <input name="resp_alternativa" id="resp_alternativa" value="a)" type="radio" />
        <span>a)</span>
      </label>
    </p>
        <div class="input-field col s12">
          <input placeholder="" name="resp_conteudo1" id="resp_conteudo1" type="text" class="validate">
          <label for="first_name">Resposta:</label>
        </div>
            <p>
      <label>
        <input name="resp_alternativa" id="resp_conteudo" type="radio" value="b)" />
        <span>b)</span>
      </label>
    </p>
        <div class="input-field col s12">
          <input placeholder="" name="resp_conteudo2" id="resp_conteudo2" type="text" class="validate">
          <label for="first_name">Resposta:</label>
        </div>
                    <p>
      <label>
        <input name="resp_alternativa" id="resp_alternativa" value="c)" type="radio" />
        <span>c)</span>
      </label>
    </p>
        <div class="input-field col s12">
          <input placeholder="" name="resp_conteudo3" id="resp_conteudo3" type="text" class="validate">
          <label for="first_name">Resposta:</label>
        </div>
         <p>
      <label>
        <input name="resp_alternativa" id="resp_alternativa" value="d)"type="radio" />
        <span>d)</span>
      </label>
    </p>
        <div class="input-field col s12">
          <input placeholder="" name="resp_conteudo4" id="resp_conteudo4" type="text" class="validate">
          <label for="first_name">Resposta:</label>
        </div>
                    <p>
      <label>
        <input name="resp_alternativa" id="resp_alternativa" value="e)" type="radio" />
        <span>e)</span>
      </label>
    </p>
        <div class="input-field col s12">
          <input placeholder="" name="resp_conteudo5" id="resp_conteudo5" type="text" class="validate">
          <label for="first_name">Resposta:</label>
        </div>    
  <button class="btn waves-effect waves-light" type="submit" name="action">Inserir
    <i class="material-icons right">send</i>
  </button>
</div>
</form>
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
      <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
  </html>