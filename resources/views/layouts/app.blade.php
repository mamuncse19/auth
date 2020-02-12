<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link id="bootstrap-style" href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('front/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!-- start: JavaScript-->

        <script src="front/js/jquery-1.9.1.min.js"></script>
        <script src="front/js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="front/js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="front/js/jquery.ui.touch-punch.js"></script>
    
        <script src="front/js/modernizr.js"></script>
    
        <script src="front/js/bootstrap.min.js"></script>
    
        <script src="front/js/jquery.cookie.js"></script>
    
        <script src='front/js/fullcalendar.min.js'></script>
    
        <script src='front/js/jquery.dataTables.min.js'></script>

        <script src="front/js/excanvas.js"></script>
        <script src="front/js/jquery.flot.js"></script>
        <script src="front/js/jquery.flot.pie.js"></script>
        <script src="front/js/jquery.flot.stack.js"></script>
        <script src="front/js/jquery.flot.resize.min.js"></script>
    
        <script src="front/js/jquery.chosen.min.js"></script>
    
        <script src="front/js/jquery.uniform.min.js"></script>
        
        <script src="front/js/jquery.cleditor.min.js"></script>
    
        <script src="front/js/jquery.noty.js"></script>
    
        <script src="front/js/jquery.elfinder.min.js"></script>
    
        <script src="front/js/jquery.raty.min.js"></script>
    
        <script src="front/js/jquery.iphone.toggle.js"></script>
    
        <script src="front/js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="front/js/jquery.gritter.min.js"></script>
    
        <script src="front/js/jquery.imagesloaded.js"></script>
    
        <script src="front/js/jquery.masonry.min.js"></script>
    
        <script src="front/js/jquery.knob.modified.js"></script>
    
        <script src="front/js/jquery.sparkline.min.js"></script>
    
        <script src="front/js/counter.js"></script>
    
        <script src="front/js/retina.js"></script>

        <script src="front/js/custom.js"></script>
    <!-- end: JavaScript-->