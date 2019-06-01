<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="author" content="Modernize WebStudio" />
    <meta name="description" content="Somos uma empresa a 35 anos especializada em construção de piscinas
       de alto padrão. Possuímos em nosso portifólio +250 piscinas projetadas e construidas.
        equipe técnica especializada para melhor te atender, representamos e distribuímos as melhores marcas de: equipamentos, filtros, acessórios de limpeza,
     saunas, aquecedores solar, trocadores de calor em 4 tamanhos, spas quadrados e redondos, piscinas
      infantis, toboaguas, escorregadores, linha completa de produtos químicos."/>
    <meta name="keywords" content="piscinas, Santa Catarina, SC, Paraná, PR, aquecedores de piscinas, aquecedores de piscinas em Palhoça, cascatas de piscinas em Palhoça, Assistencia Técnica de piscinas em Palhoça, Assistencia técnica de cascatas em Palhoça, Equipamentos de piscinas em Palhoça, Assistência técnica de aquecedores em Palhoça, piscinas infantis, casa e piscinas sc
    equipamentos, filtros, acessórios de limpeza, saunas, aquecedores solar, trocadores de calor em 4 tamanhos, spas quadrados e redondos, piscinas
    infantis, toboaguas, escorregadores, linha completa de produtos químicos
    "/>

    <meta property="og:title" content="Casa e Piscinas SC- Seu lazer com muito mais estilo!" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="http://www.casaepiscinassc.com.br/" />
    <meta property="og:site_name" content="Casa e Piscinas SC" />

    <meta name="revisit-after" content="1 days"/>
    <meta name="language" content="português - pt-br"/>
    <meta name="copyright" content="© Casa e Piscinas SC"/>
    <meta name="designer" content="Modernize"/>
    <meta name="publisher" content="Modernize"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="All"/>

    <link rel="icon" href="/img/símbolo.png">
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
    <!-- Lightbox -->
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script>
    lightbox.option({
      'positionFromTop': 100,
      'showImageNumberLabel': false
    })
    </script>

    <!-- Icon Font-->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">

    <link href="{{ asset("open-iconic-master/font/css/open-iconic-bootstrap.css") }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body class="home">
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error}}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="wpp-fixed">
      <a href="https://wa.me/5569984410581?text=Tenho%20interesse%20nos%20serviços/produtos%20do%20site" target="__blank"> <img src="../images/wpp.png" alt="" class="wpp-responsive" style="height:3.5em;"></a>
  </div>

    <!-- Loader -->
    <div id="loader-wrapper" class="loader-on">
        <div id="loader">
            <div class="loader">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <p>Carregando...</p>
            </div>
        </div>
    </div>
    <!-- //Loader -->
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
                                    <a href="/"><img src="/img/logoCasaEPiscinasSC.png" alt="Logo"></a>
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
                <div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
                    <div class="close-menu js-navbar-toggle"><i class="icon-close-cross"></i></div>
                    <ul class="nav navbar-nav">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="#quemSomos">Quem Somos</a></li>
                        <li><a href="#nossosServicos">Serviços</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Produtos<span class="ecaret"></span></a>


                            <ul class="dropdown-menu" role="menu">
                              @foreach(App\Categoria::with('subcategorias')
                                ->where ('categoria_pai',0)->get() as $categoria)

                                @if($categoria->subcategorias->count()>0)
                                  <li class="dropdown-submenu">
                                  <a href="{{ route('categorias.show', $categoria->nome) }}" data-toggle="dropdown">{{ $categoria->nome }} <span class="ecaret"></span></a>
                                  @foreach ($categoria->subcategorias as $categoria_pai)
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('categorias',$categoria->id) }}">{{ $categoria_pai->nome }}</a></li>
                                    </ul>
                                  @endforeach
                                </li>
                              @else
                                <li>
                                    <a href="{{ url('categorias', $categoria->nome) }}" data-toggle="dropdown">{{ $categoria->nome }}</a>
                                </li>
                              @endif
                              @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ url('galeria') }}">Galeria</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="page-content">

<!-- Slider -->
<div class="slider-wrapper theme-default">
  <div id="quemSomos">

  </div>
    <div id="slider" class="nivoSlider">
      <img src="/images/slider/slide1.jpg" title="#htmlcaption1" data-thumb="~/images/slider/slide1.jpg" alt="" />
      <img src="/images/slider/slide2.jpg" title="#htmlcaption2" data-thumb="~/images/slider/slide2.jpg" alt="" />
      <img src="/images/slider/slide3.jpeg" title="#htmlcaption3" data-thumb="~/images/slider/slide3.jpeg" alt="" /> </div>
    <canvas id='sea'></canvas>
    <div id="htmlcaption1" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1">A piscina dos seus sonhos<br /> ao seu alcance.</div>
                <div class="text text2">Relaxe e divirta-se.</div>
                <div class="text text3"><a href="#modalForm1" class="btn btn-orange modal-popup-link">SOLICITE UM ORÇAMENTO</a></div>
            </div>
        </div>
    </div>
    <div id="htmlcaption2" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1">
                    Nós fazemos todo o serviço.
                    <br>Você tem toda a diversão.
                </div>
                <div class="text text2">À serviço do seu lazer</div>
                <div class="text text3"><a href="#modalForm1" class="btn btn-orange modal-popup-link">SOLICITE UM ORÇAMENTO</a></div>
            </div>
        </div>
    </div>
    <div id="htmlcaption3" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1" style="color: #005395 !important">
                    Serviço 100% confiável.
                    <br>Há mais de 38 anos no mercado.
                </div>
                <div class="text text2" style="color: #005395 !important; font-weight: bolder">Água limpa, consciência limpa.</div>
                <div class="text text3"><a href="#modalForm1" class="btn btn-orange modal-popup-link">SOLICITE UM ORÇAMENTO</a></div>
            </div>
        </div>
    </div>
</div>
<!-- Slider -->
<!-- Why Choose Block -->
<div class="block bottom-sm-margin" >
    <div class="container">
        <h2 class="h2-custom text-center">QUEM SOMOS</h2>
        <p style=" text-align: center; color: #47a3f8;margin-bottom: 20px;">Conheça a Casa e Piscinas</p>
        <p class="text-center font18">

          Somos uma empresa a <b>35 anos especializada</b> em <b>construção de piscinas
           de alto padrão</b>, atendendo todo o estado de <b>Santa Catarina e Paraná.</b></p>


<p class="text-center font18">
Possuímos em nosso portifólio <b>+250 piscinas projetadas e construidas</b>,
            <b>equipe técnica e construtores especializados</b>, garantindo a <b>entrega e instalação</b> de sua piscina em até <b>72 horas.</b>
</p>
</div>
        <div class="row text-icon-carousel step-animation-container">
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0s">
                    <div class="text-icon-icon">
                        <span class="oi oi-star" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">+ DE 38 ANOS DE EXPERIÊNCIA</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="text-icon-icon">
                    </i><span class="oi oi-thumb-up" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">GARANTIA</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="text-icon-icon">
                        <span class="oi oi-cog" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">MÃO DE OBRA ESPECIALIZADA</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                    <div class="text-icon-icon">
                        <span class="oi oi-people" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">+ 1000</h5>
                    <p>CLIENTES POSITIVADOS</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                    <div class="text-icon-icon">
                    </i><span class="oi oi-heart" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">500</h5>
                    <p>PISCINAS INSTALADAS</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon step-animation" data-animation="fadeInUp" data-animation-delay="1.0s">
                    <div class="text-icon-icon">
                        <span class="oi oi-tags" style="color:white;"></span>
                    </div>
                    <h5 class="text-icon-title">400</h5>
                      <p>MIX DE PRODUTOS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Why Choose Block -->
<!-- Pricing Block -->
<div class="block bg-2">
    <div class="container">
        <div class="pricing">
            <div class="pricing-box">
                <div class="inside">
                    <h3>NOSSOS PRODUTOS</h3>
                    <div class="price-carousel">
                      @foreach ($categorias as $key => $categoria)
                        <div class="price-item">
                            <h6 class="price-title text-center">{{ $categoria->nome }}</h6>
                            <br />
                            <br />
                            <div class="price-action"><a href="#modalForm1" class="btn btn-orange modal-popup-link">SOLICITE UM ORÇAMENTO</a></div>
                        </div>
                      @endforeach
                        <div id="nossosServicos">






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Pricing Block -->

<!-- Services Block -->
<div class="block">
    <div class="container">
      <h2 class="decor color text-center">NOSSOS SERVIÇOS</h2>
        <div class="row category-carousel">
          @foreach ($servicos as $key => $servico)
            <div class="col-sm-6 col-md-4">
                <a href="#" class="category-item animation" data-animation="fadeInLeft" data-animation-delay="0s">
                    <div class="category-image">
                      <img src="{{ url('storage/'.$servico->dirFotoServ) }}" alt="" class="img-responsive"/>

                        <h5 class="category-title"><td>{{ $servico->nome }}</td>S</h5>
                        <div class="wave-wrapper">
                            <div class="wave"></div>
                        </div>
                    </div>
                    <div class="category-text">
                        <td>{{ $servico->descricao }}</td><span class="category-more-link">
                            <span class="icon icon-right-arrow"></span>
                        </span>
                    </div>
                </a>
            </div>
          @endforeach
        </div>
    </div>
</div>
<!-- //Category Block -->


<!-- How work Block -->
<div class="block bg-1">
    <div class="container">
        <h2 class="text-center decor decor-white">COMO FUNCIONA</h2>
        <div class="row number-carousel step-animation-container">
            <div class="col-sm-6">
                <div class="text-num step-animation" data-animation="fadeInLeft" data-animation-delay="0s">
                    <div class="text-num-num"><span>1</span></div>
                    <div class="text-num-info">
                        <h5 class="text-num-title">NOS ENVIE SUA SOLICITAÇÃO, DÚVIDA OU PROJETO.</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-num step-animation" data-animation="fadeInRight" data-animation-delay="0s">
                    <div class="text-num-num"><span>2</span></div>
                    <div class="text-num-info">
                        <h5 class="text-num-title">UM TÉCNICO OU RESPONSÁVEL ENTRARÁ EM CONTATO PARA ENTENDER SUA NECESSIDADE.</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-num last step-animation" data-animation="fadeInLeft" data-animation-delay="0.8s">
                    <div class="text-num-num"><span>3</span></div>
                    <div class="text-num-info">
                        <h5 class="text-num-title">MONTAREMOS UM PROJETO IDEAL PARA VOCÊ COM O ORÇAMENTO QUE IRÁ MELHOR LHE ATENDER.</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-num last step-animation" data-animation="fadeInRight" data-animation-delay="0.8s">
                    <div class="text-num-num"><span>4</span></div>
                    <div class="text-num-info">
                        <h5 class="text-num-title">ENTREGAREMOS UM SERVIÇO ESPECIALIZADO E DE QUALIDADE.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //How work Block -->
<!-- Gallery Block -->
<div class="block">
    <div class="container">
        <h2 class="decor color text-center">CONHEÇA NOSSO PORTFÓLIO</h2>
        <p class="text-center font18">Cada projeto é pensado de forma exclusiva para atender o cliente da melhor maneira possível, adequando ao seu espaço, necessidade e atendendo da melhor forma suas expectativas para criar um ambiente de diversão e descanso aconchegante e bonito!</p>
        <div class="divider"></div>
    </div>
    <div class="gallery gallery-sm" id="gallery">
        @foreach ($galerias as $key => $galeria)
          <div class="gallery__item">
                <a href="{{ url('storage/'.$galeria->dirFotoGaleria) }}" data-lightbox="mygallery" data-title="{{ $galeria->titulo }}">
                  <img src="{{ url('storage/'.$galeria->dirFotoGaleria) }}" alt=""/>
                </a>
          </div>
        @endforeach
    </div>
    <div class="text-center"><a href="/Home/Portfolio" class="more-link">Ver mais</a></div>
</div>
<!-- //Gallery Block -->



    </div>
    <div class="page-footer">
        <div class="back-to-top"><a href="#top"><span class="icon icon-up-arrow"></span></a></div>
        <div class="container">
            <div class="footer-menu hidden-sm hidden-xs">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#quemSomos">Quem Somos</a></li>
                    <li><a href="{{ url('produtos')}}">Produtos</a></li>
                    <li><a href="#nossosServicos">Serviços</a></li>
                    <li><a href="{{ url('galeria') }}">Galeria</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
            <div class="row footer-row">
                <div class="col-sm-4">
                    <ul class="contact-list">
                        <li>
                            <span class="oi oi-map-marker" style="color:white;"> </span>   Barra do Aririu, Palhoça - SC
                        </li>
                        <li><span class="oi oi-clock" style="color:white;"></span>   Seg a Sex: 7:30h às 19h – Sáb 7:30h às 13h</li>
                    </ul>
                </div>
                <div class="col-sm-4 logo-wrap">
                    <div class="logo">
                        <a href="/"><img src="/img/logoCasaEPiscinasSC.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ul class="contact-list">
                        <li class="padding-footer">
                            <div class="phone-number"><span class="oi oi-tablet" style="color:white;"></span>   48 98466-3591</div>
                        </li>
                        <li class="padding-footer"><span class="oi oi-envelope-open" style="color:white;">  </span>   <a href="mailto:casaepiscinassc@gmail.com">casaepiscinassc@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bot">
                <div class="copyright">©  Casa e Piscinas SC.</div>
                <div class="social-links">
                    <ul>
                        <li>
                            <a target="_blank" class="fa fa-facebook" href="https://www.facebook.com/casaepiscinas"></a>
                        </li>
                        <li>
                            <a target="_blank" class="fa fa-instagram" href="https://www.instagram.com/casaepiscinas"></a>
                        </li>
                        <li>
                            <a target="_blank" class="fa fa-youtube" href="https://www.youtube.com/user/casaepiscinas"></a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">Desenvolvido por: <a target="_blank" href="http://fb.com/brianlucassz">Brian Lucas</a>
                </div>
            </div>

        </div>
        <canvas id='footerSea'></canvas>
    </div>

    <div id="modalForm1" class="form-modal mfp-hide">
        <!-- request form -->
        <div class="request-form-popup">
            <form class="request-form-js" action="http://formmail.kinghost.net/formmail.cgi" method="POST" novalidate="novalidate">
                <input type="hidden" name="recipient" value="hugo@solviverpiscinas.com.br"> <!-- Pode ser qualquer endereço de email -->
                <input type="hidden" name="redirect" value="http://www.solviverpiscinas.com.br#contatoEnviado"> <!-- Após o envio, o usuário será redirecionado para a página configurada aqui -->
                <input type="hidden" name="subject" value="Contato pelo site">  <!-- Assunto da mensagem -->
                <input type="hidden" name="email" value="falecom@solviverpiscinas.com.br">   <!-- Deve ser uma conta de email ativa em seu domínio -->
                <div class="text-center">
                    <h3>SOLICITE UM ORÇAMENTO</h3>
                    <div class="successform">
                        <p>Sua mensagem foi enviada com sucesso!</p>
                    </div>
                    <div class="errorform">
                        <p>Ocorreu algum erro, atualize a página e tente novamente.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Nome" name="nome">
                        <input type="text" placeholder="E-mail" name="replyto">
                        <input type="text" placeholder="Telefone" name="telefone">
                        <textarea placeholder="Mensagem" name="Comentarios" class="input-full"></textarea>
                        <div class="hidden-xs">
                            <button type="submit" class="btn btn-orange">Enviar</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-row">
                            <p class="p-label">Selecione o serviço:</p>
                            <div class="radio-row">
                                <div class="radio">
                                    <input id="radio-1" name="Servico" type="radio" value="Piscinas" checked="">
                                    <label for="radio-1" class="radio-label">Piscinas</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-2" name="Servico" type="radio" value="Manutencao ">
                                    <label for="radio-2" class="radio-label">Manutenção </label>
                                </div>
                                <div class="radio">
                                    <input id="radio-3" name="Servico" type="radio" value="Aquecimento ">
                                    <label for="radio-3" class="radio-label">Aquecimento </label>
                                </div>
                                <br />
                                <div class="radio">
                                    <input id="radio-4" name="Servico" type="radio" value="Iluminacao">
                                    <label for="radio-4" class="radio-label">Iluminação</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-5" name="Servico" type="radio" value="Produtos">
                                    <label for="radio-5" class="radio-label">Produtos</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <p class="p-label">Qual o tamanho de sua piscina?</p>
                            <div class="radio-row">
                                <div class="radio">
                                    <input id="radio-8" name="tamanhoPiscina" type="radio" value="pequena" checked="">
                                    <label for="radio-8" class="radio-label">Pequena</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-9" name="tamanhoPiscina" type="radio" value="media">
                                    <label for="radio-9" class="radio-label">Média</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-6" name="tamanhoPiscina" type="radio" value="grande">
                                    <label for="radio-6" class="radio-label">Grande</label>
                                </div>
                                <div class="radio">
                                    <input id="radio-7" name="tamanhoPiscina" type="radio" value="nao tenho">
                                    <label for="radio-7" class="radio-label">Ainda não tenho</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <!-- //request form -->
    </div>

    <script src="{{ asset("js/jquery.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/jquery.nivo.slider.js") }}"></script>
    <script src="{{ asset("js/slick.min.js") }}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("js/jquery.waypoints.min.js") }}"></script>
    <script src="{{ asset("js/jquery.countTo.js") }}"></script>
    <script src="{{ asset("js/scrollLock.min.js") }}"></script>
    <script src="{{ asset("js/jquery.form.js") }}"></script>
    <script src="{{ asset("js/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("js/custom.js") }}"></script>

  </body>
  </html>
