<!DOCTYPE html PUBLIC >
<html lang="pt-br">
  <meta name="description" content="Card Expansion Effect with SVG clipPath" />
  <meta name="keywords" content="clipPath, svg, effect, layout, expansion, images, grid, polygon" />
  <meta name="author" content="Claudio Calautti for Codrops" />
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/card.css" />
  <link rel="stylesheet" type="text/css" href="css/pattern.css" />
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 
  <script>
  if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
    var root = document.getElementsByTagName('html')[0];
    root.setAttribute('class', 'ff');
  };
  </script>

  <meta charset="utf-8" lang="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/modernizr.custom.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- script -->
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <script src="js/demo.js"></script>
  <script src="js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/cep.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/all.css" type="text/css" media="screen"/>
   <link rel="stylesheet" href="css/base.css" type="text/css" media="screen"/>

<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">
  <!-- FONTS -->

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
               <form action="valida.php" class="form" role="form" method="post" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Login</label>
                       <input type="email"  name="email" class="form-control" id="exampleInputEmail2" placeholder="Login" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Senha</label>
                       <input type="password" name="senha" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                        <div class="help-block text-right"><a href="">Esqueceu a Senha ?</a></div>
                    </div>
                    <div class="form-group">
                   <button type="submit" name="btnEnviar" value="login" class="btn btn-primary btn-block">Entrar</button></a>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> Mantenha-me conectado
                       </label>
                    </div>
                
              </div>
              <div class="bottom text-center">
                Novo aqui ? <a href="cadastraruser.php"><b>Cadastre-se</b></a>
                Restaurante <a href="cadastrarrestaurante.php"><b>Cadastre-se</b></a>
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

<!-- inicio FULLBANNER -->
<div class="jumbotron text-center" id="slide"> 
  <h2 class="sombra">Informe seu Cep para acharmos os Restaurantes mais próximos de você</h2> 
  <br>
    <div class="input-group">
      <input type="text" class="form-control" size="8" required placeholder="Digite seu CEP" id="cep" id="txtSearch">
      <div class="input-group-btn">
            <a href="restaurante-sem.php"><button class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span>
            </button></a>
       </div>
    </div>
  <!-- inicio campo de busca -->
<div class="container" style="padding-left: 23%; padding-right: 20%; color: black;">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Não Lembra o CEP, não tem problema. Informe sua Cidade</a>
        </h4>
      </div>
      <form>
    </form>
      <div id="collapse1" class="panel-collapse collapse">
<div class="panel-footer">
  <select id="lista_estados"></select>
</div>
        <div class="panel-body">
<select id="lista_cidades"></select> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cidades -->
  </form>
</div>

<!-- fim FULLBANNER -->

<!-- inicio CONTEUDO 
<div class="conteudo">-->

  <!-- Fim campo de busca -->
</div>

<!-- Container (Services Section) -->
<div id="servico" class="container-fluid text-center">
  <h2>Serviços</h2>
  <h4>Solucionar e agilizar seu negócio</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span style="color: #757575; font-size: 50px;" class="material-icons">&#xe561;</span>
      <h4>Pedidos Online</h4>
      <p>Faça seus pedidos online aqui</p>
    </div>
    <div class="col-sm-4">
      <span style="color:#5076cd; font-size: 50px; " class="fa fa-motorcycle"></span>
      <h4>Delivery</h4>
      <p>Peça sua comida para ir a sua casa</p>
    </div>
    <div class="col-sm-4">
      <span style="color: black; font-size: 50px; " class="material-icons">&#xe86e;</span>
      <h4>Substitui seu Cardápio</h4>
      <p>Substitui seu cardápio por um digital</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span style="color: #ef494d; font-size: 50px;"  class="glyphicon glyphicon-map-marker"></span>
      <h4>Localização</h4>
      <p>Mostre a localização do seu restaurante para os seus clientes</p>
    </div>
    <div class="col-sm-4">
      <span style="color: ; font-size: 50px;" class="glyphicon glyphicon glyphicon-list-alt"></span>
      <h4>Cardápio online</h4>
      <p>Divulgue seu Cardápio </p>
    </div>
    <div class="col-sm-4">
      <span style="color:#ff9bf4; font-size: 50px;" class="glyphicon glyphicon glyphicon-piggy-bank"></span>
      <h4>Controle dos Lucros</h4>
      <p>Maior controle do seu estabelecimento</p>
    </div>
  </div>
</div>
<br>
<br>
<br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/celular.png" alt="Image">

        <div class="carousel-caption">
          <h2>Veja os Restaurantes mais Próximos</h2>
        </div>      
      </div>

      <div class="item">
        <img src="imagens/grafico.png" alt="Image">
        <div class="carousel-caption">
          <h3>Maior Controle ao Seu Restaurante</h3>
        </div>      
      </div>
      <div class="item">
        <img src="imagens/cozinha.png" alt="Image">
        <div class="carousel-caption">
          <h2>Maior Rendimento aos Funcionários</h2>
        </div>      
      </div>

      <div class="item">
        <img src="imagens/comida.png" alt="Image">
        <div class="carousel-caption">
          <h3>Facilidade na Hora da sua Escolha</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br id="sobre">

<div class="container">
  <center>
    <h1>Quem Somos ?</h1> 
    </center>
  <div class="texto-sobre" align="justify">
     Somos uma empresa startup formada por seis alunos, nossa ideia é  unir à necessidade do aplicativo Web/Mobile “Meu cardápio” localizado no Brasil,  mantendo a ideia de criar algo que simplifique e mude o mercado e o jeito como as pessoas pedem comida.
</div>
</div>
</div>
</form>

<meta name="description" content="Grid Layout with Motion Hover Effect and Content Preview" />
    <meta name="keywords" content="grid, css, layout, template, hover, content, gsap, tweenmax, overlay" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

    <main>
        <div class="content">
        <div class="grid">
          <a class="grid__item" href="#preview-1">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/1.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Érica">Érica</span></h3>
              <h4 class="box__text"><span class="box__text-inner">Bruxinha</span></h4>
              <div class="box__deco box__deco--top">🐱</div>
            </div>
          </a>
          <a class="grid__item" href="#preview-2">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/2.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Heron">Heron</span></h3>
              <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Viajante</span></h4>
              <div class="box__deco box__deco--top">☕</div>
            </div>
          </a>
          <a class="grid__item" href="#preview-3">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/3.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner"data-hover="Luan">Luan</span></h3>
              <h4 class="box__text box__text--topcloser"><span class="box__text-inner">Gameplay</span></h4>
              <div class="box__deco box__deco--top">🎮</div>
            </div>
          </a>

          <a class="grid__item" href="#preview-4">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/5.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner"data-hover="Mailson">Mailson</span></h3>
              <h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">Show</span></h4>
              <div class="box__deco box__deco--top" style="color: red;">❤</div>
            </div>
          </a>
          <a class="grid__item" href="#preview-6">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/4.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Ramon">Ramon</span></h3>
              <h4 class="box__text"><span class="box__text-inner">Bum Bum</span></h4>
              <div class="box__deco box__deco--top">🚔</div>
            </div>
          </a>
          <a class="grid__item" href="#preview-5">
            <div class="box">
              <div class="box__shadow"></div>
              <img class="box__img" src="imagens/6.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="Marcelo">Marcelo</span></h3>
              <h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">Carente</span></h4>
              <div class="box__deco box__deco--top">⚡</div>
            </div>
          </a>
        </div>
      </div>

      <div class="overlay">
        <div class="overlay__reveal"></div>
        <div class="overlay__item" id="preview-1">
          <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="imagens/original/1.png" alt="Some image"/>
              <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Érica Munis</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Bruxinhas</span></h4>
            <div class="box__deco box__deco--top">🐱</div>
          </div>
          <p class="overlay__content">It's time the tale were told of how you took a child and you made him old.</p>
        </div>
        <div class="overlay__item" id="preview-2">
          <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="imagens/original/2.png" alt="Some image"/>
            <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Heron</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Viajante</span></h4>
            <div class="box__deco box__deco--top">☕</div>
          </div>
          <p class="overlay__content">Olá humanos ! meu nome é Heron, estou concluindo o curso de internet para informatica, já trabalho na areá a 1 ano como web desing<br>
            Meu site: <a href="heronjose.com.br">heronjose.com.br</a></p>
        </div>
        <div class="overlay__item" id="preview-3">
          <div class="box">
            <div class="box__shadow"></div>

            <img class="box__img box__img--original" src="imagens/original/3.png" alt="Some image"/>
            <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Luan</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Gamepaly</span></h4>
            <div class="box__deco box__deco--top">🎮</div>
          </div>
          <p class="overlay__content">"É mais fácil uma borboleta ser atingida por um raio do que ganhar na loteria"</p>
        </div>
        <div class="overlay__item" id="preview-4">
          <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="imagens/original/5.png" alt="Some image"/>
            <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Mailson</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Show</span></h4>
            <div class="box__deco box__deco--top" style="color: red;">❤</div>
          </div>
          <p class="overlay__content">Mailson Henrique<br>
                29 anos<br>
                Noivo, Católico Apostólico Romano, apaixonado por: música, café e churrasco.</p>
        </div>
        <div class="overlay__item" id="preview-5">
          <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="imagens/original/6.png" alt="Some image"/>
            <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Marcelo</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Carente</span></h4>
            <div class="box__deco box__deco--top">⚡</div>
          </div>
          <p class="overlay__content">Nada melhor do que um copo de café no silêncio da noite, ao som de uma boa música programando códigos na busca de organizar essa minha vida sem lógica.</p>
        </div>
        <div class="overlay__item" id="preview-6">
          <div class="box">
            <div class="box__shadow"></div>
            <img class="box__img box__img--original" src="imagens/original/7.png" alt="Some image"/>
            <h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">Ramon</span></h3>
            <h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">Bum Bum</span></h4>
            <div class="box__deco box__deco--top">🚔</div>
          </div>
          <p class="overlay__content">17 anos<br>
          Adora: assistir filmes, comer pizza e conversar com os amigos, mas nada como um noite silenciosa, escutando um musica e programando</p>
        </div>       
        <button class="overlay__close" style="position: relative;top: 80px; float: right; font-size: 50px;"> &#10008;</button>
      </div>
    </main>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/demo.js"></script>

</div>
</div>
<br>
<br>


<div class="texto-sobre"  align="justify">   
    <center>
      <h1 >O Que Fazemos?</h1>
    </center>
<div class="container">
 
      Buscamos fazer o desenvolvimento de uma plataforma web de gerenciamento com aplicativo mobile. Através da plataforma o cliente pode realizar seu pedido pelo celular ou tablete, sem o risco de ocorrer um erro humano, Tendo também como total acesso o dono, assim controlando e gerenciando o seu restaurante.
      </div>
</div>
      <div class="content">
      <!-- trianglify pattern container -->
      <div class="pattern pattern--hidden"></div>
      <!-- cards -->
      <div class="wrapper">
        <center>
        <div class="card">
          <div class="card__container card__container--closed">
            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
              <defs>
                <clipPath id="clipPath1">
                  <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                  <circle class="clip" cx="960" cy="250" r="992"></circle>
                </clipPath>
              </defs>
              <image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="imagens/a.png"></image>
            </svg>
            <div class="card__content">
              <i class="card__btn-close fa fa-times"></i>
              <div class="card__caption"> 
                <h2 class="card__title"  >Missão</h2>
              </div>
              <div class="card__copy">
                <p>Ser reconhecida como o maior portal de desenvolvimento de software do Brasil, entregando serviços e conhecimento de alta qualidade, levando inovação para empreendedores.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__container card__container--closed">
            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
              <defs>
                <clipPath id="clipPath2">
                  <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                  <circle class="clip" cx="960" cy="250" r="992"></circle>
                </clipPath>
              </defs>
              <image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="imagens/b.png"></image>
            </svg>
            <div class="card__content">
              <i class="card__btn-close fa fa-times"></i>
              <div class="card__caption">
                <h2 class="card__title">Visão</h2>
              </div>
              <div class="card__copy">
                <p>  Buscamos ser uma empresa desenvolvedora de software de interface simple,s focada na usabilidade de duas grandes áreas: o gerêncimento do estabelecimento como controle de mesas ocupadas e pedidos locais realizados e os pedidos online.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__container card__container--closed">
            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
              <defs>
                <clipPath id="clipPath3">
                  <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                  <circle class="clip" cx="960" cy="250" r="992"></circle>
                </clipPath>
              </defs>
              <image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="imagens/c.png"></image>
            </svg>
            <div class="card__content">
              <i class="card__btn-close fa fa-times"></i>
              <div class="card__caption">
                <h2 class="card__title" style="  text-shadow: 4px 4px 4px #000000;">Metas</h2>
              </div>
              <div class="card__copy">
                <p>Desenvolver projetos sob medida para nossos clientes de forma competitiva e inovadora gerando valor agregado ao seu negócio, excedendo suas expectativas e criando uma parceira de longo prazo.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card__container card__container--closed">
            <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
              <defs>
                <clipPath id="clipPath4">
                  <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                  <circle class="clip" cx="960" cy="250" r="992"></circle>
                </clipPath>
              </defs>
              <image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="imagens/i.png"></image>
            </svg>
            <div class="card__content">
              <i class="card__btn-close fa fa-times"></i>
              <div class="card__caption">
                <h2 class="card__title">Valores</h2>
              </div>
              <div class="card__copy">
                <p>Integridade Moral, Honestidade, Boa fé, Responsabilidade, Disciplina, Pontualidade, Confiabilidade, Transparência, Sustentabilidade, Competência, Respeito e Ética.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      </center>
      <!-- /cards -->
    </div><!-- /content -->

  </div>

</div>
  </div>
    <script src="js/vendors/trianglify.min.js"></script>
  <script src="js/vendors/TweenMax.min.js"></script>
  <script src="js/vendors/ScrollToPlugin.min.js"></script>
  <script src="js/vendors/cash.min.js"></script>
  <script src="js/Card-circle.js"></script>
  <script src="js/demo-1.js"></script>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="background-color: #cbcbc9;">
        <div class="col-sm-7 slideanim" style="background-color: #cbcbc9;" >
                  <h2>Contato</h2>
        <div class="col-sm-6 form-group" id="contact">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>

      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
        <div class="col-sm-12 form-group">
          <button style="float: right;" class="botaoContato" type="submit">Enviar</button>
        </div>
      </div>

</div>
</div>
</div>

<!-- fim CONTEUDO -->  
<!-- inicio RODAPE -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
  </div>
</footer>
</body>

<!-- fim RODAPE -->
</html>

<script >
  var imageCount = 0;

var currentImage = 0;

var images = new Array();

images[0] = 'imagens/pizza.png';
images[1] = 'imagens/fundo1.png';
images[2] = 'imagens/fundo2.png';
images[3] = 'imagens/fundo3.png';
images[4] = 'imagens/fundo4.png';
images[5] = 'imagens/fundo5.png';
images[6] = 'imagens/fundo6.png';
images[7] = 'imagens/fundo7.png';

var slide = document.getElementById('slide');

var preLoadImages = new Array();

for (var i = 0; i < images.length; i++)
{
   if (images[i] == "")
   break;

   preLoadImages[i] = new Image();

   preLoadImages[i].src = images[i];

   imageCount++;
}

function startSlideShow()
{
   if (slide && imageCount > 0)

   {
      slide.style.backgroundImage = "url("+images[currentImage]+")";  

      slide.style.backgroundAttachment = "fixed";

      slide.style.backgroundRepeat = "no-repeat";

      slide.style.backgroundPosition = "left top";

      currentImage = currentImage + 1;

      if (currentImage > (imageCount-1))
      { 
         currentImage = 0;
      }
      setTimeout('startSlideShow()', 5000);
   }
}
startSlideShow();
</script>

<script>
  new statesCitiesBR({
  states: {
    elementID: "lista_estados",
    defaultOption: "Selecione um Estado"
  },
  cities: {
    elementID: "lista_cidades",
    state: "auto",
    defaultOption: "Selecione uma Cidade"
  }
});
</script>