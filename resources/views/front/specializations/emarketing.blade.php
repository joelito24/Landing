@extends('front.layouts.master')

@section('content')

    <section class="specializations emarketing">
        <div class="ecommerce-top">
            <div class="container">
                <p class="name-page">ESPECIALIZACIONES</p>
                <h2 class="title-page">e-Marketing y publicidad para marcas</h2>
            </div>
            <div class="ecommerce-description">
                <div class="text" data-animated="fadeInLeft">
                    <p class="subtitle">¿Quién dice que debemos elegir entre “Crear marca” o “Generar ventas”? En THATZAD sabemos cómo hacer que tu marca triunfe en Internet</p>
                    <p>En España se crean cada año más de 100.000 empresas y casi un 25% son de comercio. Las marcas deben hacerse un hueco entre tanta competencia, no sólo por diferenciación de producto o servicio sino de imagen y comunicación de marca.</p>
                    <p>Lanzar una una start-up, nueva marca de ropa, un producto de alimentación, una cadena de restaurantes o una financiera requieren de recursos humanos y económicos ligados a un plan de negocio y un plan de marketing.</p>
                    <p>Desde THATZAD diseñamos, junto con el Cliente, el plan de e-marketing, tanto la estrategia como el calendario de acciones, como todas las creatividades, la gestión integral de campañas y la medición y análisis de los resultados.</p>
                </div>
                <div class="img-info" data-animated="fadeInRight">
                    <img src="{{ asset('front/img/specials/info-emarketing.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="white-block">
            <div class="ecommerce-top white">
                <div class="ecommerce-description">
                    <div class="img-info" data-animated="fadeInLeft">
                        <img src="{{ asset('front/img/specials/info-emarketing2.png') }}" alt="">
                    </div>
                    <div class="text" data-animated="fadeInRight">
                        <h2 class="title-page">La web como herramienta clave y ADN de la marca.</h2>
                        <p>Si las campañas y las redes sociales son los embajadores de nuestra marca. La web debe ser la herramienta perfecta de comunicación y venta. Un concentrador que sea capaz de convertir tráfico cualificado en objetivos de negocio. </p>
                        <p>Uno de los puntos que nos diferencian en THATZAD es que no somos sólo una agencia, somos consultores, en cada proyecto trabaja un equipo de e-marketing, uno de diseño y uno de programación. El resultado son webs mucho mejor pensadas para vender, mejor programadas y diseñadas con esos detalles que marcan la diferencia. Todo lo que se nos pide a una agencia boutique de marketing online.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="emarketing-orders">
            <div class="container">
                <h2 class="title-page">Publicidad orientada al branding pero con objetivos de ventas</h2>
                <div class="row">
                    <div class="col-md-6" data-animated="fadeInUp">
                        <p>Potenciar la imagen de marca es importante, pero no debe estar reñido con nuestros objetivos, ¿queremos leads? ¿ventas?, ¿abrir nuevos mercados? Nuestras campañas de publicidad online siempre tienen una intencionalidad clara y se miden los resultados en tiempo real para analizar qué canales, medios, segmentos o creatividades nos acercan más a nuestros objetivos de negocio.</p>
                    </div>
                    <div class="col-md-6 right-col" data-animated="fadeInUp">
                        <p>Desarrollamos la estrategia, la web y las campañas de publicidad online de tu marca con un equipo creativo, implicado un 100% efectivo.</p>
                    </div>
                </div>
            </div>
        </div>
        @include('front.specializations.complements.action', ['title' => 'Mucho más que un proyecto digital para tu marca.', 'btntitle' => '¡Descúbrelo!'])
    </section>

@stop

@section('titles')
    <title>e-Marketing y publicidad para marcas | Thatzad</title>
    <meta name="description" content="">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#especializaciones").addClass('main-blue');
        });
    </script>
@endsection