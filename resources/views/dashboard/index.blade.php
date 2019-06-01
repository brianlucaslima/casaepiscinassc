<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html 5 template">
    <meta name="author" content="modernize.com.br">
    <link rel="icon" href="/img/solviver-piscinas-bh.png">
    <title>Casa e Piscinas SC - Santa Catarina</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/bootstrap-submenu.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/nivo-slider.css") }}" rel="stylesheet">
    <link href="{{ asset("css/slick.css") }}" rel="stylesheet">
    <link href="{{ asset("css/magnific-popup.css")}}" rel="stylesheet">
    <link href="{{ asset("css/custom.css") }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.css") }}" rel="stylesheet">
    <!-- Icon Font-->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">

    <link href="{{ asset("open-iconic-master/font/css/open-iconic-bootstrap.css") }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body class="home">
    <!-- Header -->
    <header class="page-header sticky">
        <!-- Fixed navbar -->
        <nav class="navbar" id="slide-nav">
            <div class="container">
                <div class="header-info-mobile">
                    <ul class="contact-list">
                        <li><span class="oi oi-map-marker"></span>Barra do Arririu, Palhoça - SC</li>
                        <li><span class="oi oi-tablet"></span> <a href="tel:69984410581" target="__blank">48 98466-3591</a></li>
                        <li><span class="oi oi-clock"></span>  Seg a Sex: 7:30h às 19h – sábado 7:30h às 13h</li>
                        <li><span class="oi oi-envelope-open"></span>   <a href="mailto:casaepiscinassc@gmail.com">casaepiscinassc@gmail.com</a></li>
                    </ul>
                </div>
                <div class="header-info-toggle"><i class="icon-up-arrow js-info-toggle"></i></div>
                <div class="navbar-header">
                    <div class="header-top">
                        <div class="row">
                            <div class="col-sm-4 col-lg-3 hidden-xs hidden-sm">
                                <div class="slogan">Há mais de 38 anos no mercado <br />deixando seu lazer com estilo!</div>
                            </div>
                            <div class="col-lg-1 visible-lg"></div>
                            <div class="col-sm-4 logo-wrap">
                                <div class="logo">
                                    <a href="/Home/Index"><img src="/img/LOGO SOLVIVER-01.png" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-4 hidden-xs hidden-sm">
                                <ul class="contact-list">
                                    <li><span class="oi oi-tablet"></span><a href="tel:69984410581" target="__blank">48 98466-3591</a></li>
                                    <li><span class="oi oi-clock"></span>   Seg a Sex: 7:30h às 19h - Sáb 7:30h às 13h</li>
                                    <li><span class="oi oi-envelope-open"></span>   <a href="mailto:casaepiscinassc@gmail.com">casaepiscinassc@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggle js-navbar-toggle">
                        <span style="background-color: #005395" class="icon-bar"></span>
                        <span style="background-color: #005395" class="icon-bar"></span>
                        <span style="background-color: #005395" class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <div class="block">
        <div class="container">
          <h4 class="decor color text-center">Painel de Controle</h4>
                <br>
                <br>

                <a href="{{ url('categorias') }}">Categoria Lista</a>
                <a href="{{ url('categorias/create') }}">Cadastrar Categoria</a>
                <br>
                <br>

                <a href="{{ url('servicos') }}">Serviço Lista</a>
                <a href="{{ url('servicos/create') }}">Cadastrar Serviços</a>
                <br>
                <br>


                <a href="{{ url('subcategorias') }}">Sub-Categoria Lista</a>
                <a href="{{ url('subcategorias/create') }}">Cadastrar Sub-Categoria</a>
                <br>
                <br>

                <a href="{{ url('produtos') }}">Index Produtos</a>
                <a href="{{ url('produtos/create') }}">Cadastrar Produtos</a>
                <br>
                <br>

                <a href="{{ url('galerias') }}">Index Galeria</a>
                <a href="{{ url('galerias/create') }}">Cadastrar Galeria</a>
                <br>
                <br>
            </div>
      </div>
    </body>
</html>
