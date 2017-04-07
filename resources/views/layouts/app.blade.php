<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Incidencias JS</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <style type="text/css">
        .VueTables__filter-placeholder {
              color: #fff;
              background-color: #2ab27b;
              border-color: #259d6d;
               display: inline-block;
              margin-bottom: 0;
              font-weight: normal;
              text-align: center;
              vertical-align: middle;
              -ms-touch-action: manipulation;
                  touch-action: manipulation;
              cursor: pointer;
              background-image: none;
              border: 1px solid transparent;
              white-space: nowrap;
              padding: 6px 12px;
              font-size: 14px;
              line-height: 1.6;
              border-radius: 4px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
        }
    </style>
    <!-- Scripts -->
    <script>
        var Mapa=null;
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'dptos' => incJS\Departamento::with('municipios')->get(),
            'dpto_id' => Auth::check() ? Auth::user()->departamento_id : NULL
        ]) !!};
    </script>

    <script type="text/javascript" src="/js/moment-with-locales.min.js"></script>
    <script type="text/javascript">
        moment.locale("es")
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img src="/assets/logo.png" height="30px" style="display:inline-block;position:relative;top:-10px">
                        <h4 style="display:inline-block;position:relative;top:-10px">Incidencias Semana Santa</h4>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Ingreso</a></li>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir del Sistema
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script type="text/javascript" src='/js/parsley.min.js'></script>
    <script type="text/javascript" src='/js/parsley-es.js'></script>
</body>
</html>
