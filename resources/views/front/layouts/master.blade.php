<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    @yield('titles')

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="facebook-domain-verification" content="jshrh571tev77sebddofjmai81dmy9" />
    
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('front/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('front/slick/slick-theme.css') }}" rel="stylesheet">
	
    <link href="https://www.thatzad.com/favicon.ico" rel="icon" type="image/x-icon">
	
    <!-- bootstrap -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fontAwesome icons -->
    <link href="{{ asset('front/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">

    <!--Layout landing kit digital CSS -->
    <link href="{{ asset('front/css/kitDigital.css') }}" rel="stylesheet">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet">
    {{--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="manifest" href="/manifest.json">
    <link rel="manifest" href="/latest.json">

    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({
                "notice_banner_type":"simple",
                "consent_type":"express",
                "palette":"light",
                "language":"es",
                "website_name":"Thatzad",
                "cookies_policy_url": "https://www.thatzad.com/politica-de-cookies"
            });
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3439732-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}

     gtag('consent', 'default', {
        'ad_storage':           'denied',
        'analytics_storage':    'denied',
        'wait_for_update': 1000
     });

     gtag('js', new Date());

     gtag('config', 'UA-3439732-1');
     gtag('config', 'AW-950651579');

    </script>

    <script type="text/plain" cookie-consent="tracking">
        $(document).ready(function(){
          gtag('consent', 'update', {
              'analytics_storage': 'granted'
          });
          console.log('tracking fired');
        });
    </script>

    <script type="text/plain" cookie-consent="targeting">
        $(document).ready(function(){
          gtag('consent', 'update', {
              'ad_storage': 'granted'
          });
          console.log('targeting fired');
        });
    </script>


    <!-- Google Tag Manager -->
    <script type="text/plain" cookie-consent="strictly-necessary">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-B62G');</script>
    <!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-B62G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('front.layouts.header')

@yield('content')

@include('front.layouts.footer')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/push.js"></script>
<script type="text/javascript" src="/sw.js"></script>
<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/animate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>


@yield('scripts')

<!-- Facebook Pixel Code -->
<script type="text/plain" cookie-consent="targeting">
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '332642151869248');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=332642151869248&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Hotjar Tracking Code for https://thatzad.com/ -->
<script type="text/plain" cookie-consent="targeting">
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2513513,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>
</html>