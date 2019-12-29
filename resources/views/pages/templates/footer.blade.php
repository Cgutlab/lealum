<footer class="page-footer">
    <div class="container" style="width: 100%">
        <div class="row" style="display:  flex;">
            <div class="col s12 m12 l4" style="align-self: center;">
                <img class="responsive-img" src="{{asset('img/logo_footer.png')}}">          
            </div>
                <div class="col s12 m12 l4">
                    <div class="row" style="margin:0; ">
                            <div class="col s12 m12 l12" >
                            <h5 class="titulo-footer">
                                SITEMAP
                            </h5>
                        </div>
                        
                    </div>
                    <div class="row" style="margin:0;">
                        <div class="col s6 m6 l6">
                            <a class="grey-text text-lighten-3" href="{{ url('/') }}"> Home </a>
                        </div>
                        <div class="col s6 m6 l6">
                        <a class="grey-text text-lighten-3" href="{{ url('categoriaobras') }}"> Obras </a>
                        </div>
                    </div>
                    
                    <div class="row" style=" margin:0;">
                        <div class="col s6 m6 l6">
                            <a class="grey-text text-lighten-3" href="{{ url('empresa') }}"> Empresa </a>
                        </div>
                        <div class="col s6 m6 l6">
                            <a class="grey-text text-lighten-3" href="{{ url('presupuesto') }}"> Solicitar Presupuesto </a>
                        </div>
                    </div>
                    <div class="row" style=" margin:0;">
                        <div class="col s6 m6 l6">
                        <a class="grey-text text-lighten-3" href="{{ url('categorias') }}"> Productos </a>
                        
                        </div>
                        <div class="col s6 m6 l6">
                            <a class="grey-text text-lighten-3" href="{{ url('contacto') }}"> Contacto </a>
                        </div>
                    </div>
                    <div class="row" style=" margin:0;">
                        <div class="col s6 m6 l6">
                        <a class="grey-text text-lighten-3" href="{{ url('servicios') }}"> Servicios </a>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4">
                    <div class="row">
                        <h5 class="titulo-footer" style="text-align:center;">
                            LEALUM S.A
                            FABRICA DE ABERTURAS
                        </h5>
                    </div>
                    <div class="row " style=" margin:0;">
                        <div class="col s1 m1 l1" style="padding:0">
                            <img alt="" src="{{asset('img/layouts/ubicacion.png')}}">
                        </div>
                        <div class="col s11 m11 l11" style="padding:0">
                            <a class="grey-text text-lighten-3" href="{{url('https://www.google.com.ar/maps/search/'.$direccion->descripcion )}}" target="_blank">{{$direccion->descripcion}}</a>
                        </div>
                    </div>
                    <div class="row" style=" margin:0;">
                        <div class="col s1 m1 l1" style="padding:0">
                            <img alt="" src="{{asset('img/layouts/telefono.png')}}">
                        </div>
                        <div class="col s11 m11 l11" style="padding:0">
                            <a class="grey-text text-lighten-3" href="{{url('tel:'.$telefono->descripcion)}}" target="_blank">{{$telefono->descripcion}}</a>
                        </div>
                    </div>
                    <div class="row" style=" margin:0;">
                        <div class="col s1 m1 l1" style="padding:0"> 
                            <img alt="" src="{{asset('img/layouts/telefono2.png')}}">
                        </div>
                        <div class="col s11 m11 l11" style="padding:0">
                           <a class="grey-text text-lighten-3" href="{{ url('https://wa.me/'.$telefono2->descripcion)}}" target="_blank"> {{$telefono2->descripcion}}</a>
                        </div>
                    </div>
                    <div class="row" style=" margin:0;">
                        <div class="col s1 m1 l1" style="padding:0">
                            
                            <img alt="" src="{{asset('img/layouts/mail.png')}}">
                        </div>
                        <div class="col s11 m11 l11" style="padding:0">
                            <a class="grey-text text-lighten-3" href="{{url('mailto:'.$email->descripcion)}}" target="_blank">{{$email->descripcion}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
