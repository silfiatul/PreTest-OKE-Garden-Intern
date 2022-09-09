<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ config('app.name') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="{{ url('https://kit.fontawesome.com/45fdf0481c.js') }}" crossorigin="anonymous"></script>

        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ url('frontend/assets/favicon.ico') }}"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('frontend/css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    
    <div id="app">
        <!-- Responsive navbar-->
        <header class="header">
        <button id="hamburger" class="header__menu">☰</button>
        <div class="container-logo">
            <img class="logo" src="{{ asset('https://okegarden.com/assets/img/logo.png') }}" alt="logo">
        </div>
        <nav class="nav " id="drawer">
            <ul class="nav__list">
                <li class="nav__item"><a href="#/">Beranda</a></li>
                <li class="nav__item"><a href="#/">Layanan &dtrif;</a></li>
                <li class="nav__item"><a href="#/">Mitra &dtrif;</a></li>
                <li class="nav__item"><a href="#/">Blog &dtrif;</a></li>
            </ul>
        </nav>
        <div class="container-acc">
            <i class="fa-solid fa-circle-user fa-2x acc"></i>
        </div>
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- JS -->
    <script src="{{ url('frontend/js/scripts.js') }}"></script>

</body>
</html>
