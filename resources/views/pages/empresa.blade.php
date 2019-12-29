@extends('pages.templates.body')
@section('title', 'Lealum S.A. - Empresa')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/empresa.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/certificaciones.css') }}">
@endsection
@section('contenido')
   <div class="slider hide-on-med-and-down" >
      <ul class="slides">
      @foreach($sliders as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="width: 100%; height: 100%">
            @if(!is_null($slider->texto) && !is_null($slider->texto2))
            <div class="caption caja_texto" >
               <div style="padding-top: 25px">  
                  <span style="text-align: left;font-weight: lighter;font-size: 30px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;position: relative;    bottom: 4px;right: 13px;">{!! $slider->texto !!}</span><br>
                  <span style="padding: 0;font-size: 50px; font-family: 'Source Sans Pro', sans-serif; line-height: 10px;">{!! $slider->texto2 !!}</span>
               </div>
            </div>
            @endif
          </li>
      @endforeach
      </ul>
   </div>
<div class="container" style="width: 100%;">
  <div class="empresa">  
    <div class="row" style="    margin-top: 1.5%;">
      <div class="col l5  s12 hide-on-med-and-down" style="margin-top: 3.5%;">
        <img class="responsive-img" style="" src="{!! $contenido->imagen !!}">
      </div>
      <br>
      <div class="col l7 m12 s12" style="margin-top: 0.5%;">
          <hr>
          <div class="descripcion_empresa">{!! $contenido->descripcion !!}</p></div>
          <hr>
          <div class="contenido_empresa">{!! $contenido->contenido !!}</p></div>
      </div>
  </div>
</div>
</div>
<div class="container" style="width: 100%;">
<div class="certificaciones">
  <div class="certi">  
    <div class="row" >
      <div class="col l6 m12 s12" >
      <div class="container" style="width: 65%;">
        <div class="row">
            <div class="titulo left">Calidad y garantía</div>
        </div>
        <div class="row">
            <hr class="left">
        </div>
        <div class="row">
            <div class="descripcion left" style="">{!! $certificacion->contenido !!}</div>    
        </div>
      </div>
      </div>
      <div class="col l6 m12 s12" >
          <div class="slider" style="width: 428px;height: 303px;margin:0 auto;">
      <ul class="slides">
      @foreach($imagenes as $slider)
         <li>
            <img src="{{asset($slider->imagen)}}" style="">
          </li>
      @endforeach
      </ul>
   </div>
      </div>
  </div>
</div>
</div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 334
    });

    $('.slider').slider({
        indicators: true,
        height: 303
    });
  
</script>
@endsection