@extends('pages.templates.body')
@section('title', 'Lealum S.A. - Home')
@section('css')
<link href="{{ asset('css/pages/slider.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/destacados.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/home.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/pages/lineashome.css') }}" rel="stylesheet"/>
@endsection
@section('contenido')
<div class="row">
    <div class="col s12 m12 l12" style="padding: 0">
        <div class="slider">
            <ul class="slides ">
                @foreach($sliders as $slider)
                <li>
                    <img src="{{asset($slider->imagen)}}" style="width: 100%; height: 100%">
                    @if(!is_null($slider->texto) || !is_null($slider->texto2))
                    <div class="caja_texto caption " >
                        <div>
                            <span style="text-align: left;font-weight: lighter;font-size: 30px; font-family: 'Source Sans Pro', sans-serif; font-weight: lighter;">
                                {!! $slider->texto !!}
                            </span>
                            <br>
                            <span style="font-size: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: bold;">
                                {!! $slider->texto2 !!}
                            </span>
                        </div>
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="container" style="width: 100%;">
    <div class="destacados">
        <div style="margin-top: -2%;margin-bottom: 0%;">
            <div class="row">
                <div class="col s12">
                    @foreach($destacados as $destacado)
                    <div class="col s12 m6" style="margin-top: 4%;">
                        <div class="div-product">
                            <a href="{{$destacado->link}}">
                                <img alt="" class="responsive-img" src="{{asset($destacado->imagen)}}" style="width: 100%;height: 413px">
                                    <div class="div-nombre" style="display: flex;">
                                        <span style="color: white;display: table-cell;text-align: center;justify-content: center;">
                                            {!!$destacado->nombre !!}
                                        </span>
                                    </div>
                                </img>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lineasdecontenido">
    <div class="container" style="width: 100%;">
            <div class="home col s12">
                <div class="row titulo center">
                    {!! $home->nombre !!}
                </div>
                <div class="row descripcion center">
                   {!! $home->descripcion !!}
                </div>
                <hr/>
                <div class="row contenido center">
                    {!! $home->contenido !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $('.slider').slider({
        indicators: true,
        height: 549,
        fullWidth: true
    });
</script>
@endsection
