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

<head>
     <link rel="icon" href="imagens/favicon.ico" />
</head>
  <title>Home</title>
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
                <li><a href="restauranteinicio.php">Meu Restaurantes</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="pedido.php">Pedidos</a></li>
                <li><a href="gestao.php">Gestâo</a></li>
                <li><a href="funcionarios.php">Funcionários</a></li>
                <li><a href="pagaeu.php">Premium</a></li>
                <li><a href="minha-conta-restaurante.php">Minha Conta</a></li>
          </div>
  </header>


<br>
<div class="container">
 
<center>

  <img src="imagens/logo-restaurante.png" style="width: 30%;">

</center>
<button class="btn btn-default" style="float: right;">
Logo Editar <span class="glyphicon glyphicon-pencil"></span>
</button>
<br>
</div>


<div class="container">
<h2>Nome:</h2>
<h3>Nagib</h3>
<button class="btn btn-default" style="">
Editar Nome <span class="glyphicon glyphicon-pencil"></span>
</button> 
<br>
  <h2>Sobre meu Restaurante</h2>
  <a class="list-group-item">Diversos tipos de pães com destaque à baguete, doces, bolos e tortas, lanches e ambiente de clima tranquilo.<br>
Endereço: R. Paes Leme, 88 - Centro, Marília - SP, 17500-150<br>
Horário: Aberto ⋅ Fecha à(s) 22:30<br>
Telefone: (14) 3413-8488</a>
<br>
<button class="btn btn-default" style="float: right;">
Editar <span class="glyphicon glyphicon-pencil"></span>
</button> 
 <h2>Meus Produtos</h2>
  <div class="list-group">
    <a href="#" class="list-group-item">Pizza Portuguesa</a>
    <a href="#" class="list-group-item">Pizza Frango</a>
    <a href="#" class="list-group-item">Pizza 4 Queijos</a>
    <a href="#" class="list-group-item">Ver Cardápio Completo</a>
  </div>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: new google.maps.LatLng(-22.2159592, -49.950396),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          info: {
            icon: iconBase + 'info-i_maps.png'
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(-22.2159595, -49.9500899),
            type: 'info'
          },
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgmhWzZUsVPN0LG9Q3eBnUNbCpmI3rX0A&callback=initMap">
    </script>
<br>
 <button class="btn btn-default" style="float: right;">
Editar Localização <span class="glyphicon glyphicon-pencil"></span>
</button>
<br>
<br>
<br>

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
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b1d6f12b6f27c3410a4ddae/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>