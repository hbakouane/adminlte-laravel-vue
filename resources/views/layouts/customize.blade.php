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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800&display=swap');
        #app {
            font-family: Roboto !important;
            background: #f4f4f4f4;
            overflow: hidden;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div id="app">
        <v-app>
            <Navbar :user="{{ auth()->user() }}" logo="{{ url('assets/images/logo.png') }}" active="{{ \Illuminate\Support\Facades\Route::currentRouteName() }}"></Navbar>
            <v-main>
                <v-container fluid class="px-0">
                    @yield('content')
                </v-container>
            </v-main>
        </v-app>
    </div>
    @yield('scripts')
</body>
</html>
