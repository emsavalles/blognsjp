<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('assets/css/bootstrap.css'); }}
        <style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.contf {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}        
        </style>
    </head>
    <body>
        <div class="container">
        <div class="contf">
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
        @endif
        {{ Form::open(array('url' => '/login','class'=>'form-signin','role'=>'form')) }}
            <legend>Iniciar sesi&oacute;n</legend>
            <div class="form-group">
                {{ Form::label('usuario', 'Nombre de usuario') }}
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
            </div>
            <div class="form-group">
                {{ Form::label('contraseña', 'Contrase&ntilde;a') }}
                {{ Form::password('password', array('class' => 'form-control')); }}
            </div>

            {{ Form::submit('Entrar', array('class' => 'btn btn-lg btn-primary btn-block')) }}
        {{ Form::close() }}
        <a class="btn btn-lg btn-default " href=".">Ir al sitio</a>

        </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('assets/js/bootstrap.js'); }}
    </body>
</html>