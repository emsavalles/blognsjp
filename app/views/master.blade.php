<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
            <title>{{{$title}}}</title>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

		{{ HTML::style('assets/css/bootstrap.css') }}
		{{ HTML::style('assets/css/font-awesome.css') }}
		{{ HTML::style('assets/css/main.css') }}

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="container" id="cuerpo">
	<div id="cabeza">
        <div class="col-md-3">
            <div class="hidden-xs logo">{{HTML::image('assets/img/logo.png')}}</div>
        </div>
        <div class="col-md-6" id="eltitulo">{{HTML::image('assets/img/titulo-encabezado.png')}}</div>
        <div class="col-md-3" style="padding:0;">
        <div class="row" style="padding:0 15px 0 0">
            <a href="#" class="fa-stack fa-lg pull-right red buscador">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-search fa-stack-1x gris"></i>
            </a>
            <a href="#" class="fa-stack fa-lg pull-right red">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-envelope fa-stack-1x gris"></i>
            </a>
            <a href="#" class="fa-stack fa-lg pull-right red">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x gris"></i>
            </a>
            <a href="#" class="fa-stack fa-lg pull-right red">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x gris"></i>
            </a>
            </div>
            <div id="buscador">
                <div>
                    <div class="input-group">
                      <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button class="botonb" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->

            </div>
    
        </div>
    </div>
    <div class="navbar" role="navigation" id="menu">
      <div class="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed fa fa-bars hidden-md" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-md" href="#">Reforma Penal SLP</a>
        </div>
        <div class="navbar-collapse collapse" id="contenedormenu">
          <ul class="nav navbar-nav menu">
            <li><a href=".">Inicio</a></li>
            <li><a href="#about">La Reforma</a></li>
            <li><a href="#contact">El Consejo</a></li>
            <li><a href="#about">Secretar&iacute;a Ejecutiva</a></li>
            <li><a href="#contact">Capacitaci&oacute;n</a></li>
            <li><a href="#about">Transparencia</a></li>
            <li><a href="contacto">Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enlaces Externos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="#">SETEC</a></li>
                  <li><a href="#">Procuradur&iacute;a General del Estado</a></li>
                  <li><a href="#">Secretar&iacute;a de Seguridad P&uacute;blica del Estado </a></li>
                  <li><a href="#">Poder Judicial del Estado</a></li>
                  <li><a href="#">Centro de Atenci&oacute;n a V&iacute;ctimas del Delito</a></li>
                  <li><a href="#">Coordinaci&oacute;n de la Defensor&iacute;a Social y de Oficio</a></li>
                  <li><a href="#">H. Congreso del Estado de San Luis Potos&iacute;</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div><!--/MENU -->
    <div>
         {{$main}}
    </div>
      </div>
        <div id="pie" class="container">
            <a href="#"> Inicio</a> | <a href="#">Antecedentes</a> | <a href="#">Normatividad</a> | <a href="#">Capacitaci&oacute;n</a><br>
            Calle 3 Guerras No. 100 Col. Moderna, C.P. 78233 San Lu&iacute;s Potos&iacute;, S.L.P.
        </div>
    </div>

		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/bootstrap.js') }}
		{{ HTML::script('assets/js/main.js') }}
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        -->
    </body>
</html>
