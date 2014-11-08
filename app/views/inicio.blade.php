<div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active">
      {{HTML::image('img/personal capacitado.jpg')}}
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    <div class="item">
      {{HTML::image('img/ssitemas de riego.jpg')}}
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    <div class="item">
      {{HTML::image('img/subestaciones electricas.jpg')}}
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fa fa-angle-left fa-lg control"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fa fa-angle-right fa-lg control"></span>
  </a>
</div>


      </div> 
<div id="lasnoticias" class="col-md-7">
<h1 class="ribbon">Noticias</h1>
{{$content}}
</div> 
@include('aside')
