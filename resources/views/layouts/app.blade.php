<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Xun Lab</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div  id="app">
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="{{asset('/img/mops_logo_2.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
                Laba#2
            </a>
            <a class="" href="/gallery">
               <b>Галерея</b>
            </a>
            <a href="/form">
              <b>Форма</b>
            </a>
            <a class="" href="/charts">
                <b>Графики</b>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul>
                    <li>
                        <a href="gallery/">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a>
                            Graphs
                        </a>
                    </li>
                    <li>
                        <a>
                            CRUD - enteryes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')

    </main>
    <footer>

    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
