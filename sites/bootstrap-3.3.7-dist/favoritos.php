    <!DOCTYPE html PUBLIC >
<html>

  <meta charset="utf-8" lang="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/all.js"></script>
    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
  <script type="text/javascript"> </script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/all.css" type="text/css" media="screen"/>

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
</head>
  <title>Meu Cardápio Facil</title>
<body>
  <header>
    <div class="menu-top">
      <nav class="navbar navbar-inverse navbar-static-top">
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
               <li><a href="restaurante.php">Restaurantes</a></li>
                <li><a href="localizacao.php">Localização</a></li>
                <li><a href="favoritos.php">Favoritos</a></li>
                <li><a href="historico.php">Historico</a></li>
               
        
              </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

<script ></script>









  <div class="container">
  <h2>Favoritos</h2>
  <p>Busque seus restaurantes favoritos</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar">
  <br>
  <br>

  <!-- Botão para chamar o modal -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Criar nova categoria</button>
<br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- conteudo do  Modal-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2>Adicionar Categorias</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="nome">Nome da categoria:</label>
      <input type="text" class="form-control" id="nome" placeholder='escreva o nome da categoria ex: Por cidade por tipo de comida como você quiser' name="nome">
    </div>
</form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background:  #B22222; color: #fff; ">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<br>
  <br>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" >
      <h4 class="panel-title" >
          <a data-toggle="collapse" href="#collapse1">Favoritos <span class="glyphicon glyphicon-chevron-down" style="float: right;"></span></a>
        </h4>
      </div>
    <div id="collapse1" class="panel-collapse">
        <div class="panel-body">
  <ul class="list-group" id="myList">
    <li class="list-group-item"><img src="https://static-images.ifood.com.br/image/upload/f_auto,t_low/logosgde/f5c71d65-c6df-4019-8e2c-2f83aca3c3c9/201801230738_22365.jpg" style="width: 10%;" >Orly  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
    <li class="list-group-item"><img src="http://www.fasttelepizza.com.br/img/logo2.png" style="width: 10%;" >Tele Pizza <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
    <li class="list-group-item"><img src="http://www.churrascariakieza.com.br/public/imgs/logo01.png" style="width: 10%;" >Kieza <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
    <li class="list-group-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmjeiQ_DWu52I0RZBks1usG_Srnzv213vrdZngXdImn9MXIp5-Dg" style="width: 10%;" >Alvorada  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
  </ul> 

        </div>
      </div>
    </div>
  </div>


<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" >
      <h4 class="panel-title" >
          <a data-toggle="collapse" href="#collapse2">Churrascaria <span class="glyphicon glyphicon-chevron-down" style="float: right;"></span> </a>
        </h4>
      </div>
    <div id="collapse2" class="panel-collapse">
        <div class="panel-body">
  <ul class="list-group" id="myList">
        <li class="list-group-item"><img src="http://www.churrascariakieza.com.br/public/imgs/logo01.png" style="width: 10%;" >Kieza  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
       <li class="list-group-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmjeiQ_DWu52I0RZBks1usG_Srnzv213vrdZngXdImn9MXIp5-Dg" style="width: 10%;" >Alvorada  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
        <li class="list-group-item"><img src="https://cdn.neemo.com.br/uploads/settings_webdelivery/logo/1063/cupim.jpg
" style="width: 10%;" >Cupim  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
      <li class="list-group-item"><img src="https://www.baurupocket.com.br/estabelecimentos/logos/babybuffalo_200x200.jpg" style="width: 10%;" >   Baby Buffalo  <span class="fa fa-heart" style="font-size:38px;color:red; float: right;"></span></li>
  </ul> 

        </div>
      </div>
    </div>
  </div>











</div>











<a href='#' class='expandir'></a>



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

