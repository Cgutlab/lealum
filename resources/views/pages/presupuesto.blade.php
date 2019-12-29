@extends('pages.templates.body')
@section('title', 'Lealum S.A. - Consejos de Seguridad')
@section('css')
<link href="{{ asset('css/pages/clientes.css') }}" rel="stylesheet"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@endsection
@section('contenido')

@if(count($errors) > 0)
<div class="col s12 card-panel red lighten-4 black-text text-darken-4 center" style="margin-top: 0px;">
    <ul>
        @foreach($errors->all() as $error)
            <li>{!!$error!!}</li>
        @endforeach
    </ul>
</div>
@endif
@if(session('success'))
<div class="col s12 card-panel green lighten-4 green-text text-darken-4 center" style="margin-top: 0px;">
    {{ session('success') }}
</div>
@endif

<div align="center">
<?php
if(isset($_GET['mensaje'])){
    if($_GET['mensaje']=="ok"){ ?>

        <div class="alert alert-success text-center" role="alert" style="background: #007E00; border-bottom: 1px solid gray;">
            <?php echo "¡El mensaje se envió correctamente!" ?>
        </div>

    <?php }else{ ?>

        <div class="alert alert-danger text-center" role="alert"  style="background: orange; border-bottom: 1px solid gray;">
            <?php echo "¡Error al enviar el mensaje!"?>
        </div>

    <?php }
}
?>
</div>
<form action="{{route('enviarmail')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
<div class="container" style="margin-bottom: 100px; overflow-x: hidden">
    <div class="row" style="margin-top: 100px; overflow-x: hidden">
        <div id="estado1" style="overflow-x: hidden " >
            <div class="col l12">
                <div align="center">
                    <img class="responsive-img" style="align-items: center;" src="{{asset('img/presupuesto1.jpg')}}">
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col l5 m6 s12 push-l1">
                        <input type="text" id="nombre" name="nombre" required class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col l5 m6 s12 push-l1">
                        <input type="text" id="localidad" name="localidad" required class="validate">
                        <label for="localidad">Localidad</label>
                    </div>
                    <div class="input-field col l5 m6 s12 push-l1">
                        <input type="text" id="email" name="email" required class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col l5 m6 s12 push-l1">
                        <input type="text" id="telefono" name="telefono" required class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col l5 m6 s12 pull-l1 right">
                        <button type="button" id="botonSiguienteEstado" class="btn right z-depth-0" style="margin-top: 20px; background-color:#278CCC; color:white; font-weight: bold;">Siguiente</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="estado2" style="display: none; overflow-x: hidden">
        <div class="col l12">
            <div align="center">
                <img class="responsive-img" style="align-items: center;" src="{{asset('img/presupuesto2.jpg')}}">
            </div>
            <div class="row">
                <div class="input-field col l5 m6 s12 push-l1">
                    <textarea id="mensaje" name="mensaje"  class="materialize-textarea validate" style="padding:0;"> @if(!is_null($mensaje)) {{ $mensaje }} @endif</textarea>
                    <label for="mensaje">Mensaje</label>
                </div>
                <div align="right">
                  <div class="file-field col l5 m6 s12 push-l1">
                    <div class="btn" style="background-color: white;height: 39px;width: 183px;color: #278CCC;    border: 1px solid;font-family: 'Source Sans Pro', sans-serif;position: relative;">
                <span>Archivo</span>
                {!! Form::file('archivo') !!}
            </div>
            <div class="file-path-wrapper" style="color: black">
                {!! Form::text('archivo',null, ['class'=>'file-path']) !!}
            </div>
                  </div>

                </div>
                <div class="input-field col l5 m6 s12 pull-l1 right">
                    <button type="button" id="botonEstadoAnterior" class="btn center z-depth-0" style="margin-top: 20px; background-color:white; border:1px solid #278CCC; color:black;">Anterior</a>
                    <button type="submit" id="botonSiguienteAnterior" class="btn right z-depth-0" style="margin-top: 20px; background-color:#278CCC; color:white; font-weight: bold;">Enviar</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script>

    document.getElementById("botonSiguienteEstado").addEventListener("click", mostrarEstado2);
    document.getElementById("botonEstadoAnterior").addEventListener("click", mostrarEstado1);

    function mostrarEstado2() {
        document.getElementById("estado1").className = "animated bounceOutLeft";
        setTimeout(function(){ 
            document.getElementById("estado1").style.display = "none"; 
            document.getElementById("estado2").style.display = "block";
            document.getElementById("estado2").className = "animated bounceInRight";
        }, 200);

    }
    
    function mostrarEstado1() {
        document.getElementById("estado2").className = "animated bounceOutLeft";
        
        setTimeout(function(){ 
            document.getElementById("estado2").style.display = "none"; 
            document.getElementById("estado1").style.display = "block";
            document.getElementById("estado1").className = "animated bounceInRight";

        }, 1);
    }
    
    function animacion(id, clase) {
        $(id).removeClass("animated "+clase).addClass(clase + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass("animated "+clase);
        });
    };

</script>




</body>
</html>

        @endsection

@section('js')

<script type="text/javascript">
 $(document).ready(function(){
  $('.dropdown-trigger').dropdown({
    constrainWidth: false,
    closeOnClick: false,
    fullWidth: false,
    hover: 1,
  });
   });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.modal').modal();
  });
</script>
        @endsection
