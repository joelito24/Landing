@extends('front.layouts.master')

@section('content')

    <section class="specializations ecommerce">
        <div class="ecommerce-top">
            <div class="container">
                <p class="name-page">ESPECIALIZACIONES</p>
                <h1 class="title-page">Proyectos de eCommerce </h1>
            </div>
            <div class="ecommerce-description">
                <div class="text" data-animated="fadeInLeft">
                    <h2 class="subtitle">¿Quieres saber cómo haremos que tu tienda online sea un éxito? Descubre cómo lo hacemos en nuestra agencia de eCommerce.</h2>
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
                        <p class="subtitle">Fidelización, palanca de futuro en eCommerce</p>
                        <p>Pero es cara generar la primera venta online de un cliente, así que debemos potenciar mucho más las revisitas y segundas compras. Debemos inventar nuevas formas de aplicar conceptos tradicionales de fidelización. Mediante campañas de mail marketing, remarketing, Social Ads, push notifications, marketing Automation, creación de contenidos, propuesta de valor y muchas otras que desarrollemos pensando en ti.</p>
                        <p>Y aunque tenemos una amplia experiencia y sabemos lo que funciona y lo que no, no tenemos una barita mágica, el éxito lo conseguimos a base de conocimiento, creatividad e implicación en tu proyecto.</p>
                            <a class="quote" href="{{ route('service','agencia-automation-marketing') }}">
                            <span>¿Quieres que te lo expliquemos con un par de ejemplos?</span></a>
                            <a class="" href="{{ route('service','agencia-automation-marketing') }}" style="cursor:pointer"><div class="downArrow bounce">
                                {{--<img style="max-width: 23px;color: #fff;" src="{{ asset('front/img/home/right-arrow-angle.png') }}" alt="">--}}
                                <svg style="max-width: 23px;color: #00bde0;" aria-hidden="true" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                            </div></a>
                            
                    </div>
                    <div class="col-md-4 col-md-offset-1" data-animated="fadeInUp">
                        <img src="{{ asset('front/img/specials/info-ecommerce.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @include('front.specializations.complements.action', ['title' => 'Los líderes futuros de cada vertical de eCommerce se están definiendo ahora.', 'btntitle' => '¡Hagámoslo juntos!'])
    </section>

@stop

@section('titles')
    <title>Agencia eCommerce Barcelona. Consultoría y desarrollo</title>
    <meta name="description" content="¿Quieres saber cómo haremos que tu proyecto de e‑Commerce sea un éxito? Descubre cómo lo planteamos en la agencia de eCommerce THATZAD.">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#especializaciones").addClass('main-blue');
        });
    </script>
@endsection