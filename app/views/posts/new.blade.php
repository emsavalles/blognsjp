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
<!--
{{Form::model($campos,array('url'=>'admin/post/save','method'=>'post','role'=>'form','class'=>'form-horizontal','autocomplete'=>'off'))}}
-->
{{ Form::open(array('url' => 'admin/post/save', 'files' => true)) }}
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">T&iacute;tulo</label>
    <div class="col-sm-10">
    {{ Form::text('title', null, array('placeholder' => '', 'class' => 'form-control')) }}
    </div>
  </div>
  
  <div class="form-group">
    <label for="bajada" class="col-sm-2 control-label">Bajada</label>
    <div class="col-sm-10">
        {{ Form::textarea('bajada', null, array('placeholder' => '', 'class' => 'form-control','rows'=>'2')) }}
    </div>
  </div>
  
  <div class="form-group">
    <label for="lugar" class="col-sm-2 control-label">Lugar</label>
    <div class="col-sm-10">
    {{ Form::text('lugar', null, array('placeholder' => '', 'class' => 'form-control')) }}
    </div>
  </div>
   
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Contenido</label>
    <div class="col-sm-10">
        {{ Form::textarea('content', null, array('placeholder' => '', 'class' => 'form-control','rows'=>'15')) }}
    </div>
  </div>

<div class="form-group">
    <label for="imagen" class="col-sm-2 control-label">Imagen</label>
    <div class="col-sm-10">
    <input type="file" id="imagen" name="imagen"/>
    </div>
  </div>
    
<!--
  <div class="form-group">
    <label for="imagen" class="col-sm-2 control-label">Imagen</label>
    <div class="col-sm-10">

        <div class="input-group">
        {{ Form::text('imagen', null, array('placeholder' => '', 'class' => 'form-control')) }}
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Subir Imagen</button>
          </span>
        </div>    
    
    </div>
  </div> 
 --> 
  <div class="form-group">
    <label for="pie" class="col-sm-2 control-label">Pie</label>
    <div class="col-sm-10">
    {{ Form::text('pie', null, array('placeholder' => '', 'class' => 'form-control')) }}
    </div>
  </div> 
        
  <input type="hidden" value="1" name="visible" />
<!--  
  <div class="form-group">
    <label for="audio" class="col-sm-2 control-label">Audio</label>
    <div class="col-sm-10">

        <div class="input-group">
        {{ Form::text('audio', null, array('placeholder' => '', 'class' => 'form-control')) }}
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Subir Audio</button>
          </span>
        </div>    
    
    </div>
  </div>  


  <div class="form-group">
    <label for="video" class="col-sm-2 control-label">Video</label>
    <div class="col-sm-10">
    {{ Form::text('video', null, array('placeholder' => '', 'class' => 'form-control')) }}
    </div>
  </div>
 -->        
{{ Form::button('Guardar nota', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
{{ Form::close() }}