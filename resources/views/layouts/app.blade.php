<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    	.img-fluid{
    		width: 200px;
    		height: 200px;
    	}
        .form-center{
            margin-left: 20% !important;
        }
        .btn-center{
            margin-left: 35% !important;
        }
        .title-center{
            margin-left: -20% !important;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Práctica Viernes
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                        	<a href="{{ url('/') }}" class="nav-link"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registro') }}">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>                            
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/readUsers') }}">Usuarios</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ url('/mail') }}">Enviar Correo</a>
                        </li>           
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        	<div class="container">
        		@yield('content')
        	</div>

        </main>
    </div>
</body>
</html>
