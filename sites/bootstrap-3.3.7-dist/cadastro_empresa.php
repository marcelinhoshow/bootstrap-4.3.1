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

<div style="padding-right: 10%; padding-left: 10%; position: relative; top: 10">
        <div class="form-group">
    <label for="Nome">Nome Fantasia</label>
    <input type="text" class="form-control" id="Nome" placeholder="Nome Fantasia">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Senha">
  </div>
    <div class="form-group">
    <label for="CNPJ">CNPJ</label>
    <input  class="form-control" type="text" id="CNPJ" size="14" maxlength="9" placeholder="CNPJ"/>
  </div>

     <div>
 <label for="localizacao">Localização do seu estabelecimento</label>
   <div id="map"> </div>
<script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -17.175661, lng: -57.6894406},
          zoom: 18
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Seu estabelecimento está aqui ? <br> Se sim pode continuar. <br>');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Não foi possivel achar seu estabelecimento talvez seu navegador não suporte o Geolocalizamento ou esta bloqueado nas configurações Não tem problema ! digite onde fica ele no campo busca no mapas' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgmhWzZUsVPN0LG9Q3eBnUNbCpmI3rX0A&callback=initMap">
    </script>

</div>
<div></div>

<!-- checbox -->
<div class="container">
  <br>
<div class="row">
         <div class="btn-group">
         
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tipos De Comida   &dArr;</button>
            <ul class="dropdown-menu">
               <li>
                   <a href="">Qual Tipo de Comida Você Quer ?</a>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                      Caféteria
                   </label>
               </li>
                <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                      Churrascaria 
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Alemã
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Arabe
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Asíatica
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                      Culinária Brasileira
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Francesa
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Indiana
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Mexicana
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Portuguesa
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Culinária Saudável
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                      Culinária Sul-Americana
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Doceria 
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Fast-food
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Frutos do Mar
                   </label>
               </li>
                <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Lanches
                   </label>
               </li>
                <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Marmitaria
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Padaria 
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Pizzaria 
                   </label>
               </li>
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Salgados
                   </label>
               </li> 
               <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Sorveteria
                   </label>
               </li>
                <li>
                   <label class="dropdown-menu-item checkbox">
                       <input type="checkbox" />
                       <span class="glyphicon glyphicon-unchecked"></span>
                       Vegetariana
                   </label>
               </li>
                <li role="separator" class="divider"></li>               
                <li>
                   <button class="btn btn-link dropdown-menu-item">
                    Enviar
                   </button>
                   
               </li>
            </ul>
         </div>
      </div>
   </div>

<!--  Fim checbox -->

  <div class="form-group">
    <label for="exampleSelect1">Quantos Computadores tem no seu estabelecimento ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>0</option>
      <option>1</option>
      <option>2 a 5</option>
      <option>6 a 10</option>
      <option>+10</option>
      <option>Não quero informar</option>
    </select>
  </div>

    <div class="form-group">
    <label for="exampleSelect1">Quantos Smartphone tem no seu estabelecimento ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>0</option>
      <option>1</option>
      <option>2 a 5</option>
      <option>6 a 10</option>
      <option>+10</option>
      <option>Não quero informar</option>

    </select>
  </div>

     <div class="form-group">
    <label for="exampleSelect1">Quantos entregas mensais seu restaurante realiza ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>0</option>
      <option>1</option>
      <option>2 a 5</option>
      <option>6 a 10</option>
      <option>+10</option>
      <option>Não quero informar</option>

    </select>
  </div>

   <div class="form-group">
    <label for="exampleSelect1">Quantos motoqueiros tem no seu estabelecimento ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>0</option>
      <option>1</option>
      <option>2 a 5</option>
      <option>6 a 10</option>
      <option>+10</option>
      <option>Não quero informar</option>

    </select>
  </div>

   <div class="form-group">
    <label for="exampleSelect1">Quantas franquias seu sistema tem ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>0</option>
      <option>1</option>
      <option>2 a 5</option>
      <option>6 a 10</option>
      <option>+10</option>
      <option>Não quero informar</option>

    </select>
  </div>

    <div class="form-group">
    <label for="exampleSelect1">Pretende usar  Smartphone para anotação dos pedidos dos clientes ?</label>
    <select class="form-control" id="exampleSelect1">
      <option>Sim</option>
      <option>Não</option>
      <option>Talvez</option>
      <option>Não quero informar</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Logo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>

    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Gostaria de Receber e-mails de promoções, comunicados e novidade. 
    </label>
  </div>
  <div class="form-check">
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

 <center><a href="restauranteinicio.php"><button type="submits" class="btn btn-primary">Enviar</button></a></center>
</div>

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