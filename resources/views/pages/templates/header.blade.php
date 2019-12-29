<header><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<nav class="header-nav">
    <div class="container nav-flex" style="width:100%; height: 100%;">
        <div class="container" style="width:100%; height: 100%;">
            <div class="row" style="display:flex;">
                <div class="col s12 m6 l3" style="display:flex; align-items:center;">
                    <a href="{{ url('/') }}" style="height: 100px;">
                        <img class="responsive-img" src="{{asset('img/logo_lealum.png')}}" alt="">
                    </a>
                </div>
                <div class="col s12 m6 l9">
                    <a class="sidenav-trigger icon_menu" data-target="mobile-demo" href="#" >
                        <i class="material-icons " >menu</i>
                    </a>
                    <div class="right hide-on-med-and-down">
                        <div class="row" style="margin:0;">
                            <div class="col s12 m12 l12">
                                <div class="redes-header" style="word-spacing: 10px;">
                                    <i class="fab fa-whatsapp" style="color: #278CCC; font-size:17px "></i>
                                    <a href="{{ url('https://wa.me/'.$telefono2->descripcion)}}" target="_blank" style="color: #595959;font-size: 16px;font-family: 'Source Sans Pro', sans-serif;word-spacing: 3px;"> Whats App · {{ $telefono2->descripcion}}    </a>
                                    <a style="color: black;"> |</a>
                                    @if($activo=='contacto')
                                    <a class="activo" href="{{ url('/contacto', '') }}" style="color: black;"> CONTACTO     </a>
                                    @else
                                    <a href="{{ url('/contacto', '') }}" style="color: black;"> CONTACTO     </a>
                                    @endif
                                    <a style="color: black;"> |</a>
                                    @if($activo=='trabaja')
                                    <a class="activo" href="{{ url('trabaja') }}" style="color: black;    word-spacing: 5px;"> TRABAJA CON NOSOTROS      </a>
                                    @else
                                    <a href="{{ url('trabaja') }}" style="color: black;    word-spacing: 5px;"> TRABAJA CON NOSOTROS      </a>
                                    @endif
                                    <a style="color: black;"> |</a>
                                    <a href="" data-target="modalbuscador" class="iconos-redes modal-trigger" style="">
                                        <i class="fas fa-search" style="color:#278CCC; font-size:17px;"></i>
                                    </a>
                                    <!-- Modal Structure -->
                                    <div id="modalbuscador" class="modal">
                                        <div class="modal-content">
                                            <h4><a href="#!" class="right modal-close waves-effect waves-green btn-flat" style="font-family: 'Lato';color: #278CCC;font-weight: bold;">Cerrar</a></h4>
                                            <div class="row">
                                                <div class="col l12 m12 s12">
                                                     <h4 style="font-family: 'Source Sans Pro', sans-serif; color: #278CCC">Buscar por nombre de producto</h4>
                                                </div>
                                                <div class="col l12 m12 s12">   
                                                    {!!  Form::open(['route' => 'buscar', 'method' => 'POST','class' => 'left']) !!}
                                                    <div class="lupa">
                                                        <input id="mobile_search" name="nombre" placeholder="" type="search">
                                                        <button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: white!important;height: 39px;width: 153px;color: #278CCC;    border: 1px solid;font-family: 'Source Sans Pro', sans-serif;">Buscar
                                                        </button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(is_null($facebook->link))<a href="{{ $facebook->link}}"><i class="fab fa-facebook-square" style="color:#278CCC;"></i></a>@endif
                                    @if(is_null($facebook->link))<a href="{{ $instagram->link}}"><i class="fab fa-instagram" style="color:#278CCC;"></i></a>@endif
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin:0;">
                            <div class="col s12 m12 l12">
                                <div class="linksheader" style="word-spacing: 10px;">
                                    @if($activo=='empresa')
                                        <a class="activo" href="{{ url('empresa') }}" >    EMPRESA     </a>
                                    @else
                                        <a href="{{ url('empresa') }}" >     EMPRESA     </a>
                                    @endif
                                        <a> |</a>
                                    @if($activo=='productos')
                                        <a class="activo" href="{{ url('categorias') }}" >    PRODUCTOS      </a>
                                    @else
                                        <a href="{{ url('categorias') }}" >    PRODUCTOS      </a>
                                    @endif
                                        <a> |</a>
                                    @if($activo=='servicios')
                                        <a class="activo" href="{{ url('servicios') }}" > SERVICIOS     </a>
                                    @else
                                    <a href="{{ url('servicios') }}" > SERVICIOS     </a>
                                    @endif
                                        <a> |</a>
                                    @if($activo=='obras')
                                        <a class="activo" href="{{ url('/categoriaobras') }}" > OBRAS     </a>
                                    @else
                                        <a href="{{ url('/categoriaobras') }}" > OBRAS     </a>
                                    @endif
                                        <a> |</a>
                                    @if($activo=='presupuesto')
                                        <a class="activo" style="word-spacing: 3px;" href="{{ url('presupuesto') }}" > SOLICITUD DE PRESUPUESTO</a> 
                                    @else
                                        <a style="word-spacing: 3px;" href="{{ url('presupuesto') }}" > SOLICITUD DE PRESUPUESTO</a> 
                                    @endif
                                        <a> |</a>
                                    <!--
                                    @if($activo=='clientes')
                                        <a class="activo" href="{{ url('/clientes') }}" > CLIENTES      </a>
                                    @else
                                    <a href="{{ url('/clientes') }}" > CLIENTES      </a>
                                    @endif
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Para moviles --}}
<ul class="sidenav" id="mobile-demo" style="position: absolute;color: #7D0045;">
        <ul class="collapsible collapsible-accordion">
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/') }}">
                    <img class="responsive-img" src="{{asset('img/logo_lealum.png')}}" alt="">
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/empresa') }}">
                    <i class="material-icons">
                        group
                    </i>
                    EMPRESA
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('categorias') }}">
                    <i class="material-icons">
                        map
                    </i>
                    PRODUCTOS
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('servicios') }}">
                    <i class="material-icons">
                        new_releases
                    </i>
                    SERVICIOS
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('/contacto', 'General') }}">
                    <i class="material-icons">
                        contact_mail
                    </i>
                    CONTACTO
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('categoriaobras') }}">
                    <i class="material-icons">
                        build
                    </i>
                    OBRAS
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('presupuesto') }}">
                    <i class="material-icons">
                        format_list_numbered
                    </i>
                    PRESUPUESTO
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('clientes') }}">
                    <i class="material-icons">
                        people
                    </i>
                    CLIENTES
                </a>
            </li>
            <li class="bold">
                <a class="principalmovil collapsible-header waves-effect waves-admin" href="{{ url('trabaja') }}">
                    <i class="material-icons">
                        work
                    </i>
                    TRABAJA CON NOSOTROS
                </a>
            </li>
        </ul>
    </ul>
</header>