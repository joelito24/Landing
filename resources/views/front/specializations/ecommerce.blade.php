@extends('front.layouts.master')

@section('content')

    <section class="specializations ecommerce">
        <div class="ecommerce-top">
            <div class="container">
                <p class="name-page">ESPECIALIZACIONES</p>
                <h2 class="title-page">Proyectos de e-Commerce </h2>
            </div>
            <div class="ecommerce-description">
                <div class="text" data-animated="fadeInLeft">
                    <p class="subtitle">¿Quieres saber cómo haremos que tu proyecto de e-Commerce sea un éxito? Descubre cómo lo planteamos en THATZAD.</p>
                    <p>El comercio electrónico alcanzó en 2016 los 22MM de €, eso supone un 11% de todas las compras minoristas. Hay mucho negocio pero cada vez más competidores, los márgenes se reducen y hemos de ser capaces de optimizar nuestras tiendas online.</p>
                    <p>En THATZAD ideamos campañas que no traigan visitantes sino compradores, con segmentaciones muy pensadas, mensajes adaptados a cada target y creatividades a cada canal.</p>
                </div>
                <div class="img-info" data-animated="fadeInRight">
                    <img src="{{ asset('front/img/specials/ecommerce.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="white-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-animated="fadeInUp">
                        <p>El siguiente paso es que nuestra tienda online sea nuestro mejor vendedor, que sea perfecta, con una tasa de conversión optimizada (CRO). Cuidando todos los detalles de usabilidad, presencia de marca, lucimiento de productos, generación de confianza, persuabilidad…</p>
                    </div>
                    <div class="col-md-5 col-md-offset-1" data-animated="fadeInUp">
                        <ul class="list-benefits">
                            <li>Usabilidad</li>
                            <li>Presencia de marca</li>
                            <li>Lucimiento de productos</li>
                            <li>Generación de confianza</li>
                            <li>Persuabilidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-stripers">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"  data-animated="fadeInUp">
                        <p class="subtitle">Fidelización, palanca de futuro en e-commerce</p>
                        <p>Pero es cara generar la primera venta online de un cliente, así que debemos potenciar mucho más las revisitas y segundas compras. Debemos inventar nuevas formas de aplicar conceptos tradicionales de fidelización. Mediante campañas de mail marketing, remarketing, Social Ads, push notifications, marketing automation y muchas otras que desarrollemos pensando en ti.</p>
                        <p>Y aunque tenemos una amplia experiencia y sabemos lo que funciona y lo que no, no tenemos una barita mágica, el éxito lo conseguimos a base de conocimiento, creatividad e implicación en tu proyecto.</p>
                        <p class="conclusion">Los líderes futuros de cada vertical de e-commerce se están definiendo ahora.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-1" data-animated="fadeInUp">
                        <img src="{{ asset('front/img/specials/info-ecommerce.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @include('front.specializations.complements.action', ['title' => 'Los líderes futuros de cada vertical de e-commerce se están definiendo ahora.', 'btntitle' => '¡Hagamos juntos!'])
    </section>

@stop

@section('titles')
    <title>Proyectos de e-Commerce | Thatzad</title>
    <meta name="description" content="">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#especializaciones").addClass('main-blue');
        });
    </script>
@endsection