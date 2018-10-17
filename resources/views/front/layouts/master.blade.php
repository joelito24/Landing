<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @yield('titles')

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('front/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('front/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fontAwesome icons -->
    <link href="{{ asset('front/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
    {{--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="manifest" href="/manifest.json">
    <link rel="manifest" href="/latest.json">
    <script type="text/javascript" src="/push.js"></script>
    <script type="text/javascript" src="/sw.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3439732-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-3439732-1');
    </script>
</head>
<body>

@include('front.layouts.header')

@yield('content')

@include('front.layouts.footer')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/animate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>


@yield('scripts')

</body>
</html>