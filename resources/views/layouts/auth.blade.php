<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/main.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Adminlte Theme style -->
    <link rel="stylesheet" href="{{ url('assets/adminlte/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <style>
        #app {
            font-family: Mulish !important;
            background: #f4f4f4f4;
        }
    </style>


    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="hold-transition">
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
