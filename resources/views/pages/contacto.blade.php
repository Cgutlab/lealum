@extends('pages.templates.body')
@section('title', 'Lealum S.A. - Contacto')
@section('css')

<link rel="stylesheet" href="{{ asset('css/pages/contacto.css') }}">

@endsection
@section('contenido')
<!-- body -->        
   
	<main>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2000772333326!2d-58.5706635845928!3d-34.57380366342331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb9c301cba29f%3A0x6feefed1ef1a3ea7!2sAv.+Eva+Per%C3%B3n+3954%2C+Billinghurst%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1554989284031!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		<section class="contacto">
			<div class="container">
				<h1 class="naranja mayus fs36" style="color: #278CCC; font-size: 47px; font-family: 'Source Sans Pro', sans-serif;">Contacto</h1>
				<div class=""><b>Consulta:</b> @if(!is_null($producto)){{$producto}} @endif</div>
				<div style="margin-top: 20px; margin-bottom: 20px; color: #6F6F6F;">Contáctenos y le proporcionaremos la información que necesite</div>

				<div class="row">
					<div class="col s12 l12">
						{!!Form::open(['route'=>'enviarmailcontacto', 'method'=>'POST'])!!}
						{{ csrf_field() }}
					      	<div class="row">
					      	{!!Form::hidden('producto',$producto,['class'=>''])!!}
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('nombre',null,['class'=>'', 'placeholder'=>'Nombre', 'required'])!!}
					          		<label for="nombre"></label>
					        	</div>
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('apellido',null,['class'=>'', 'placeholder'=>'Apellido', 'required'])!!}
					          		<label for="apellido"></label>
					        	</div>
					      	</div>
					      	<div class="row">
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::email('email',null,['class'=>'', 'placeholder'=>'Correo electronico', 'required'])!!}
					          		<label for="email"></label>
					        	</div>
					        	<div class="input-field col m6 s12" style="color: black">
					          		{!!Form::text('empresa',null,['class'=>'', 'placeholder'=>'Empresa'])!!}
					          		<label for="empresa"></label>
					        	</div>
					      	</div>
					      	<div class="row no-margin">
					        	<div class="input-field col m6 s12" style="color: black">
			          				<label for="mensaje"></label>
			          				{!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea', 'placeholder'=>'Mensaje', 'required'])!!}
					        	</div>
							    <div class="col s6">
					        <div class="g-recaptcha" data-sitekey="6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3"></div>
					        	<br>
							      	<button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: white;height: 39px;width: 183px;color: #278CCC;    border: 1px solid;font-family: 'Source Sans Pro', sans-serif;">Enviar
									</button>
								</div>
					      	</div>
					</div>
				</div>
				{!!Form::close()!!}
			</div>
	</section>


@endsection

@section('js')
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

	<script type="text/javascript">
        $('.logo').click(() => {
            window.location.href = "";
        });
    </script>
@endsection





