<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html 5 template">
    <meta name="author" content="modernize.com.br">
    <link rel="icon" href="/img/símbolo.png">
    <title>Casa e Piscinas SC - Santa Catarina</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/bootstrap-submenu.css") }}" rel="stylesheet">
    <link href="{{ asset("css/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/nivo-slider.css") }}" rel="stylesheet">
    <link href="{{ asset("css/slick.css") }}" rel="stylesheet">
    <link href="{{ asset("css/magnific-popup.css")}}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.css") }}" rel="stylesheet">

    <link href="{{ asset("open-iconic-master/font/css/open-iconic-bootstrap.css") }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <script type="text/javascript">
      function excluir_registro( e ){
        if( !confirm('Deseja realmente excluir este registro?') )
        {
          if( window.event)
            window.event.returnValue=false;
          else
            e.preventDefault();
        }
      }

      function editar_registro( e ){
        if( !confirm('Deseja realmente editar este registro?') )
        {
          if( window.event)
            window.event.returnValue=false;
          else
            e.preventDefault();
        }
      }

      function atualizar_registro( e ){
        if( !confirm('Deseja realmente atualizar este registro?') )
        {
          if( window.event)
            window.event.returnValue=false;
          else
            e.preventDefault();
        }
      }

      function nao_salvar_registro( e ){
        if( !confirm('Deseja realmente voltar sem salvar este registro?') )
        {
          if( window.event)
            window.event.returnValue=false;
          else
            e.preventDefault();
        }
      }
    </script>

</head>

<body class="home">
  <div class="block">
  <div class="container">
    @yield('content')



    </div>

  </body>
</html>
