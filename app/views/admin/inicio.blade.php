<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   {{ HTML::style('assets/css/bootstrap.css'); }}
   {{ HTML::style('assets/css/font-awesome.css'); }}
   <style>
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      /* Set the fixed height of the footer here */
      height: 60px;
      background-color: #f5f5f5;
    }
    .form-group{ overflow: auto; margin:0 0 5px 0 !important;}
   </style>
    <title><?php echo (isset($title))? $title : "Bienvenido"; ?></title>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NSJP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user"></i> {{ Auth::user()->username; }} <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
            <li>
                <a href="{{ action('AuthController@logOut') }}">Cerrar Sesi&oacute;n</a>                        
            </li>
            </ul>
          </li>
          
        </ul>        
        </div><!--/.nav-collapse -->
      </div>
      
    </nav>

    <div>
    
<div class="col-md-2">
    <a href="{{ action('PostController@newPost') }}">Nuevo Post</a>
</div>

<div class="col-md-10">
<?php if (isset($main))
echo $main;
?>
</div>
    
<!--    
        <div class="">
            <h2>Bienvenido: {{ Auth::user()->username; }}</h2>
            <a href="{{URL::to('logout')}}">Cerrar sesi&oacute;n.</a>
        </div>

<p class="navbar-text navbar-right">Bienvenido: {{ Auth::user()->username; }} <a href="{{URL::to('logout')}}" class="navbar-link">Cerrar Sesi&oacute;n</a></p>
        

<div class="panel panel-default">
  <div class="panel-heading"><h3>Panel heading without title</h3></div>
  <div class="panel-body">
<p>
<a class="btn btn-success" href="#">
    <i class="fa fa-save fa-lg"></i> Agregar noticia
</a>
</p>
<p>
<a class="btn btn-danger" href="#">
    <i class="fa fa-trash-o fa-lg"></i> Borrar noticia
</a></p>

  </div>
</div>
-->
<!--
    </div>
    <div class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </div>  
-->          
</body>
        {{ HTML::script('assets/js/jquery.js'); }}
        {{ HTML::script('assets/js/bootstrap.js'); }}
        
</html>