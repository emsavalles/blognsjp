{{--
	<div class="welcome">
    	<h1>Bienvenido {{Auth::user()->name}}</h1>
        <a href="/logout">Cerrar sesión</a>
    </div>
    
 --}}
 
<div id="lasnoticias" class="col-md-7">
<h1 class="ribbon">Contacto</h1><br />
    <div class="seccion1">
@if(isset($errors)&& count($errors)>0)
   <div class="alert alert-danger">
      @foreach($errors as $item)
         <li> {{ $item }} </li>
      @endforeach
   </div>
@endif
@if (Session::has('mensaje'))
   <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
@endif
<?php $campos=(isset($input))?$input:"";?>
<div id="divcontacto">
    	{{Form::model($campos,array('url'=>'contacto','method'=>'post'),array('role'=>'form','class'=>'form-horizontal'))}}
             <div class="form-group">
                {{ Form::label('nombre', 'Nombre',array('class'=>'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('nombre', null, array('placeholder' => '', 'class' => 'form-control')) }}
                </div>      
            </div>
			<div class="form-group">
              {{ Form::label('email', 'E-mail',array('class'=>'col-sm-2 control-label')) }}
              	<div class="col-sm-10">
              {{ Form::text('email', null, array('placeholder' => '', 'class' => 'form-control')) }}
                </div>      
            </div>
			<div class="form-group">
              {{ Form::label('telefono', 'Telefono',array('class'=>'col-sm-2 control-label')) }}
              	<div class="col-sm-10">
             	 {{ Form::text('telefono', null, array('placeholder' => '', 'class' => 'form-control')) }}
                </div>      
            </div>
			<div class="form-group">
              {{ Form::label('asunto', 'Asunto',array('class'=>'col-sm-2 control-label')) }}
              	<div class="col-sm-10">
              {{ Form::text('asunto', null, array('placeholder' => '', 'class' => 'form-control')) }}
                </div>      
            </div>
			<div class="form-group">
              {{ Form::label('mensaje', 'Mensaje',array('class'=>'col-sm-2 control-label')) }}
              	<div class="col-sm-10">
              {{ Form::textarea('mensaje', null, array('placeholder' => '', 'class' => 'form-control')) }}
                </div>      
            </div>

        {{ Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
        {{ Form::close() }}
</div>
    </div>
    <br>
    <div class="seccion1">
        <div class="row" style="margin-left:20px; padding-right: 20px;">
            <b>Consejo de Coordinación para la implementación de la <br>Reforma de Justicia Penal en el Estado de San Luis Potosí</b>
        </div><br>
        <div class="row" style="margin-left:20px;">
            <span class="fa-stack fa-lg col-md-3 col-xs-3">
              <i class="fa fa-circle fa-stack-2x" style="color:#999" ></i>
              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
            </span>
            <div class="col-md-9 col-xs-9">contacto@reformapenal.gob.mx</div>
        </div><br>
        <div class="row" style="margin-left:20px;">
            <span class="fa-stack fa-lg col-md-3 col-xs-3">
              <i class="fa fa-circle fa-stack-2x" style="color:#999" ></i>
              <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
            </span>
            <div class="col-md-9 col-xs-9">Calle 3 Guerras No. 100 Col. Moderna, C.P. 78233<br>San Luís Potosí, S.L.P., México</div>
        </div><br>
        <div class="row" style="margin-left:20px;">
            <span class="fa-stack fa-lg col-md-3 col-xs-3">
              <i class="fa fa-circle fa-stack-2x" style="color:#999" ></i>
              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span>
            <div class="col-md-9 col-xs-9">52+(444)814 29 24 y<br>52+(444)814 50 55</div>
        </div>
    </div>
</div> 
@include('aside')