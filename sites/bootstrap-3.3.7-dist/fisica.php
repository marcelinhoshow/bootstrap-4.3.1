    <!DOCTYPE html PUBLIC >
<html>

  <meta charset="utf-8" lang="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/modernizr.custom.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- script -->
  <script src="js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/all.css" type="text/css" media="screen"/>

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<head>
     <link rel="icon" href="imagens/favicon.ico" />
</head>
  <title>Meu Cardápio Facil</title>
<body>
  <header>
    <div class="menu-top">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            <div class="logo-pb">
              <a href="index.php">
               <img src="imagens/logo_pb.png" class="logo-pb">
               <li class="logo-pb">MEU CARDÁPIO</li>
              </a> 
            </div>      
          </div>

         <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Início</a></li>
              <li><a href="#servico">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
                <li class="dropdown">
                  <a href="cadastro.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Cadastro<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="cadastro_empresa.php">Empresa</a></li>
                  <li><a href="fisica.php">Pessoa Física</a></li>
                </ul>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>

           <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Google</a>
                </div>
                                Ou
               <form action="valida.php" class="form" role="form" method="post" action="login.php"  id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Login</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Login" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Senha</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                        <div class="help-block text-right"><a href="">Esqueceu a Senha ?</a></div>
                    </div>
                    <div class="form-group">
                      <a href="valida.php"> <button type="submit" name="btnEnviar" value="login" class="btn btn-primary btn-block">Entrar</button></a>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> Mantenha-me conectado
                       </label>
                    </div>
                
              </div>
              <div class="bottom text-center">
                Novo aqui ? <a href="cadastraruser.php"><b>Cadatre-se</b></a>
                Restaurante <a href="cadastrarrestaura.php"><b>Cadatre-se</b></a>
                 </form>
              </div>
           </div>
        </li>

              </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>






<br>
<br>
<br>
<br>
<form style="padding-right: 10%; padding-left: 10%; position: relative; top: 10" method="POST" action="construtor/cadastro-pessoa.php">
            <div class="form-group">
    <label for="Login">Login</label>
    <input type="text" class="form-control" id="login" placeholder="login">
  </div>
      <div class="form-group">
    <label for="Nome">Nome</label>
    <input type="text" class="form-control" id="Nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Senha</label>
    <input type="password" class="form-control"  placeholder="Confirmar Senha">
  </div>









<form action="checkout-sample" method="POST">
    <label for="exampleInputcep">CEP</label> <input type="text" class="form-control" name="cep" id="cep"  placeholder="CEP"/>
</form>
    <div class="form-check"  style="padding-right: 10%; padding-left: 10%; position: relative; top: 10">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Gostaria de Receber e-mails de promoções, comunicados e novidade. 
    </label>
  </div>
  <div class="form-check"  style="padding-right: 10%; padding-left: 10%; position: relative; top: 10">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      
Esta de acordo com os termos de uso e as políticas de privacidade.
    </label>
  </div>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>

      <button class="g-recaptcha" data-sitekey="6LfP6FkUAAAAAKM08HEKuaRU40bqG15xv6QpjRjU" data-callback='onSubmit'></button>
      <br/>

 <center><a href="restaurante.php"><button type="submits" class="btn btn-primary"value="Cadastrar" id="cadastrar"> Enviar</button></a></center>
 </form>


    


      <br>
      <br>
      <br>
      <br>
      <br>

<!-- inicio RODAPE -->
<footer class="footer">
  <div class="logo-footer">
    <p class="text-center">
      <img src="imagens/logo_cor.png">
    </p>
  <div class="row">
    <div class="sociais-icon">
      <div class="social-icon" id="face-icon" >
       <a href="https://www.facebook.com/Meu-Card%C3%A1pio-F%C3%A1cil-1185079184960211/?view_public_for=1185079184960211"><img src="imagens/icons/facebook-logo-outline.svg" style="height: 7%;"/></a>
      </div> 
      <div class="social-icon" id="insta-social">
       <a href="https://www.instagram.com/meucardapiofacil/"> <img src="imagens/icons/instagram-social-outlined-logo.svg" style="height: 7%;"/></a>
      </div>
      <div class="social-icon" id="youtube-social">
       <a href="https://www.youtube.com/channel/UCLhRHyV27hQIYTfGmqH2cKA?disable_polymer=true"> <img src="imagens/icons/youtube-play-button-outlined-social-symbol.svg" style="height: 7%;"/></a>
      </div>
      <div class="social-icon" id="twitter-social">
        <a href="https://twitter.com/?request_context=signup"><img src="imagens/icons/twitter-social-outlined-logo.svg" style="height: 7%;"/></a>
      </div>
    </div> 
  </div>
  </div>
</footer>
</body>


<!-- fim RODAPE -->
</html>
<!-- fim RODAPE -->
</html>

