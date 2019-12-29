<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de administración</title>
    
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png"/>

    <link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login/login.css') }}" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="logo-login">
                    <img class="center responsive-img" src="{{asset('img/logo_lealum.png')}}" alt="">
                </div>
                {!!Form::open(['route'=>'login', 'method'=>'POST', 'class' => 'col s12'])!!}
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            {!!Form::text('username',null,['class'=>''])!!}
                            {!!Form::label('Usuario')!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            {!!Form::password('password')!!}
                            {!!Form::label('Contraseña')!!}
                        </div>
                    </div>

                    <button class="boton btn-large right" name="action" type="submit">
ENTRAR
                    </button>
                {!!Form::close()!!}
            </div>
        </div>
    </main>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Materialize Core JavaScript -->
    <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
</body>

</html>
