<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- OwlCarousel Css (it has to be loaded before any Css file)  -->
    <link rel="stylesheet" href="{{ url('assets/OwlCarousel/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/OwlCarousel/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ url('css/main-page.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .section-padding {
            padding: 40px !important;
        }
        .w-50-100-m {
            width: 50% !important;
        }
        .contact-icon {
            padding: 15px;
            border-radius: 25px;
        }
        .list-style-none {
            list-style: none;
        }

        @media screen and (max-width: 900px) {
            .section-padding {
                padding: 5px !important;
            }
            .w-50-100-m {
                width: 100% !important;
            }
        }

        @yield('css')
    </style>

    @yield('styles')

    @yield('header')
</head>
<body>
    <div id="app container-fluid">
        @yield('content')
    </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- Owl Carousel Js -->
    <script src="{{ url('assets/OwlCarousel/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
    
    <!-- Main Js -->
    <script src="{{ url('js/main.js') }}"></script>
    
    <script type="text/javascript">
        // Handle buttons hover
        let buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            let color = button.style.color;
            let background = button.style.background || button.style.backgroundColor;
            button.addEventListener('mouseover', () => {
                button.style.backgroundColor = color;
                button.style.color = background;
            })
            button.addEventListener('mouseleave', () => {
                button.style.backgroundColor = background;
                button.style.color = color;
            })
        })
        @yield('scripts')
    </script>

</body>
</html>
