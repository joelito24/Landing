<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @yield('titles')

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('front/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('front/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fontAwesome icons -->
    <link href="{{ asset('front/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
    {{--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body class="lost">
    <header id="header" class="header_transparent">
        <div class="container">
            <div class="col-md-4">
                <a href="{{ route('home') }}" ><img class="img-logo" src="{{ asset('front/img/logo_white.png') }}"></a>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="col-md-offset-6 col-md-6">
            <div class="main-text">
                <p>Error</p>
                <p class="big">404</p>
            </div>
            <div class="text">
                <p>Vaya...</p>
                <p>Parece que le has perdido.</p>
            </div>

            <a href="{{ route('home') }}">Volver a la Home ></a>
        </div>

    </div>
    <div class="container bottom">
        <img class="img-logo" src="{{ asset('front/img/men.png') }}">
    </div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/animate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>


@yield('scripts')

</body>
</html>