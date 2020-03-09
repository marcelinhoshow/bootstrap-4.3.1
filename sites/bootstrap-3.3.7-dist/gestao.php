  <!DOCTYPE html PUBLIC >
<html>

  <meta charset="utf-8" lang="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
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
                <li><a href="gestao.php">Gestão</a></li>
                <li><a href="funcionarios.php">Funcionários</a></li>
                <li><a href="pagaeu.php">Premium</a></li>
                 <li><a href="minha-conta-restaurante.php">Minha Conta</a></li>
          </div>
  </header>
  <center>
 <h2>Quanto meu Restaurante está Recebendo</h2>
  </center>
      <br>
      <br>
<canvas id="opa" width="400" height="135%;"></canvas>
      <br>
      <br>
<center>
  <h2>Quanto meu Restaurante está Lucrando com as vendas dos produtos</h2>
  </center>
  <br>
  <br>
<canvas id="line" width="400" height="135%;"></canvas>
      <br>
      <br>
      <center>
  <h2>Quais produtos mais vendem</h2>
  </center>
      <br>
      <br>
<canvas id="Comida" width="400" height="135%;"></canvas>
      <br>
      <br>
      <center>
  <h2>Rendimentos dos Garçons</h2>
  </center>
      <br>
      <br>
<canvas id="garcom" width="400" height="135%;"></canvas>



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

<script>
  /* Graficos */


  var opa = document.getElementById('opa').getContext('2d');
var myChart = new Chart(opa, {
    type: 'line',
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro",],
        datasets: [{
                label: 'Foi Arrecadado em 2017 R$',
                data: [1000, 3000, 4500, 4500, 5000, 6000, 10000, 20000, 21000, 19000, 18000, 16500,],
                backgroundColor: "rgba(0, 255, 0, 0.3)",
                borderColor: "#002200"
            }
        ]
    }
});



  var line = document.getElementById('line').getContext('2d');
var myChart = new Chart(line, {
    type: 'line',
    data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro",],
        datasets: [{
                label: 'O Lucro em vendas em 2017 R$',
                data: [600, 1500, 2900, 3000, 2800, 3500, 5600, 11700, 14000, 10000, 9000, 8200,],
                backgroundColor: "rgba(229, 203, 42, 0.3)",
                borderColor: "#002200"
            }
        ]
    }
});


var Comida = document.getElementById("Comida").getContext('2d');
var myChart = new Chart(Comida, {

    type: 'bar',
    data: {
        labels: ["Pastel", "Coca Cola", "Coxinha", "Pizza de Frango", "Batata Frita"],
        datasets: [{
            label: 'Foram vendidos',
            data: [2200, 4000, 4500, 1000, 1500,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(173, 255, 196, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(81, 208, 118, 1)',
                 'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


var garcom = document.getElementById("garcom").getContext('2d');
var myChart = new Chart(garcom, {

    type: 'bar',
    data: {
        labels: ["Paulo", "José", "João", "Pedro", "Marcos"],
        datasets: [{
            label: 'Pedidos Recolidos',
            data: [2200, 2000, 1800, 3000, 2700,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(173, 255, 196, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(81, 208, 118, 1)',
                 'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

      

/* Fim Graficos */
</script>