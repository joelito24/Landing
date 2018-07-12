@extends('front.layouts.master')

@section('content')

<section class="home">
    <div class="top padding-head">
        <div class="container">
            <div class="row top-home">
                <div class="col-md-6 left-col" data-animated="fadeInLeft">
                    <p class="title-top">Marketing<br> por vocación</p>
                    <p class="title-top">Digitales<br> por naturaleza</p>
                </div>
                <div class="col-md-6 right-col" data-animated="fadeInRight">
                    <div class="text-box">
                        <p class="text-grand">“En Thatzad nos sentimos tremendamente orgullosos de hacer crecer tu negocio digital”</p>
                        <p>Entendiendo bien tu mercado, tu organización y las necesidades de tu proyecto. Con más de 10 años de experiencia para llegar por el canal más rentable a tu cliente objetivo</p>
                        <p>Desarrollamos la estrategia, la web y las campañas de publicidad con un equipo creativo, implicado y 100% efectivo.</p>
                    </div>
                    <div class="white-box">
                        Somos tu agencia boutique de marketing online
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infographics">
        <div class="container">
            <div class="row inner-info">
                <div class="col-md-4 text-info">
                    <h2>Proyectos integrales de marketing online</h2>
                    <div class="info-block" id="text1" data-text="1">
                        <p class="text-bg">Ideas de negocio</p>
                        <p class="title-info">Ideas de negocio/Bussines plan</p>
                        <p>Todo proyecto se inicia con una idea de negocio y plan de marketing. Dominamos el medio, <span>llevamos más de 12 años haciendo crecer negocios online como el tuyo.</span> Hemos aprendido de los éxitos, pero también de los fracasos. Conocemos las tendencias, sabemos hacia dónde se dirige el futuro. Podemos ayudarte a darle forma a tu idea y diseñar la estrategia que necesitas para cumplir tus objetivos.</p>
                    </div>
                    <div class="info-block" id="text2" data-text="2">
                        <p class="text-bg">Diseño web</p>
                        <p class="title-info">Diseño web, Marketing web, Programación web</p>
                        <p>Una web, e-commerce o portal son siempre una pieza clave, pero sólo la primera de una proyecto mucho mayor. Ideamos, <span>diseñamos y programamos proyectos web realmente diferentes.</span> Proyectos totalmente a medida, creados sobre un lienzo en blanco con un equipo interdisciplinar de marketing, diseño y programación. </p>
                    </div>
                    <div class="info-block" id="text3" data-text="3">
                        <p class="text-bg">SEO, SEA, Adwords</p>
                        <p class="title-info">SEO, SEA/Adwords</p>
                        <p><span>Somos Google Premier Partner (logo)</span>, sabemos la importancia de una web perfectamente adaptada para Google, tanto a nivel SEO como para optimizar Adwords. La estrategia de keywords nos marcará la arquitectura de la web, así que nos gusta que sea uno de los primeros drivers de plan de e-Marketing.</p>
                    </div>
                    <div class="info-block" id="text4" data-text="4">
                        <p class="text-bg">Publicidad online</p>
                        <p class="title-info">Publicidad online y remarketing</p>
                        <p>Creamos <span>campañas de publicidad online que conectan exactamente con ese cliente que buscas.</span> Una vez lanzamos la web, hemos de empezar a traer tráfico cualificado que generen conversiones y ventas.  Ideamos campañas display efectivas, acciones de remarketing multi fase, que consigan la venta por impulso o que vayan enamorando poco a poco, dependerá de la estrategia.</p>
                    </div>
                    <div class="info-block" id="text5" data-text="5">
                        <p class="text-bg">Social<br> Media Ads</p>
                        <p class="title-info">Social Media Ads</p>
                        <p>Las Redes sociales nos permiten crear campañas online conociendo muy bien al cliente potencial al que nos dirigimos. Creamos campañas de <span>Social Ads con un equipo especialista, experimentado, creativo y orientado totalmente a objetivos.</span></p>
                    </div>
                    <div class="info-block" id="text6" data-text="6">
                        <p class="text-bg">Medios e influencers</p>
                        <p class="title-info">Medios e influencers</p>
                        <p>Quien conozca los entresijos de internet sabrá que los medios online y los influencers son un canal de altísimo impacto con un lenguaje propio. Campañas de content marketing que combinadas con estrategias de remarketing e inbound <span>son la clave del éxito en el lanzamiento de marcas.</span></p>
                    </div>
                    <div class="info-block" id="text7" data-text="7">
                        <p class="text-bg">Automation, Inbound Marketing</p>
                        <p class="title-info">Automation, Inbound Marketing, Mail Marketing</p>
                        <p>Inbound & Automation marketing. La tecnología nos ayuda a saber exactamente que ha motivado a un usuario a interactuar con nosotros. <span>Diseñamos estrategias para atraer a un cliente concreto</span> y posteriormente ir persuadiéndole poco a poco y en diferentes medios, con contenidos adaptados a él.</p>
                    </div>
                </div>
                <div class="col-md-8" id="infografia">
                    @include('front.home.complements.infografia')
                    <!-- <object type="image/svg+xml" data="picture.svg">
                      <img
                        src="{{ asset('front/img/specials/infografía_180308-08.svg') }}">
                    </object> -->
                    <!-- <img src="{{ asset('front/img/specials/infografía_180308-08.svg') }}"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="specializations">
        <div class="container">
            <div class="row">
                <h2 class="title-home">Especializaciones</h2>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization1') }}">
                        <div class="inner-special fourth-special">
                            <div class="line-yellow"></div>
                            <p data-animated="fadeInUp">Proyectos de e-commerce</p>
                            <div data-animated="fadeInUp" class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div  class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                    
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization2') }}">
                        <div class="inner-special third-special">
                            <div class="line-yellow"></div>
                            <p  data-animated="fadeInUp">Campañas orientadas a resultados</p>
                            <div  data-animated="fadeInUp" class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                    
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization3') }}">
                        <div class="inner-special second-special">
                            <div class="line-yellow"></div>
                            <p data-animated="fadeInUp">E-marketing y publicidad para marcas</p>
                            <div data-animated="fadeInUp" class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization4') }}">
                        <div class="inner-special first-special">
                            <div class="line-yellow"></div>
                            <p data-animated="fadeInUp">Transformación digital para empresas</p>
                            <div data-animated="fadeInUp" class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="whitepapers">
        <div class="container">
            <div class="row">
                <h2 class="title-home">White papers</h2>
                <div class="btn-blue"><a href="{{ route('whitepapers') }}">Ver todos los White papers ></a></div>
                <div class="whitepaper col-md-offset-1" data-animated="fadeInUp">
                    <div class="col-md-7 left-col-whitepaper">
                        <p class="title-whitepaper">Título del white paper</p>
                        <p class="text">Hear directly from the people who know it best. From teh to politics to creativity and more -whatever your interest, we’ve got you covered.</p>
                        <div class="btn-yellow-full"><a href="">Leer más</a></div>
                    </div>
                    <div class="col-md-5 right-col-whitepaper">
                        <img src="{{ asset('front/img/home/objeto-inteligente-vectorial.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-home">Artículos</h2>
                    <div class="btn-blue"><a href="">Ver todos los White papers ></a></div>    
                </div>
            </div>
            <div class="col-md-4 col-article" data-animated="fadeInUp">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-article" data-animated="fadeInUp">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-article" data-animated="fadeInUp">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
               
             
        </div>
    </div>
</section>

@stop

@section('scripts')
<script>
    $(document).ready(function () {
        $("#header").addClass('header_transparent');
        $("#header").addClass('header_home');
        //$(".servicios").addClass('main-blue');
        $("#sobre").attr("src","{{ asset('front/img/header/sobre.png') }}");
        $('.cls-8').click(function(){
        });
        $("#burger, #mobile-close").click(function(){
            $("#header").toggleClass('header_transparent');
            $("#header").toggleClass('pos-abs');
            $("#burger, #mobile-close").toggle();
            $("#mobile-menu-content").toggle();
        });
        $('#infografia #transparencias polygon').css('display', 'none');
        $('#infografia #lineas_amarillas path').css('display', 'none');
        $('#infografia #lineas_azules path').css('display', 'none');
        $('#lineas polyline').css('display', 'none');
        $('#lineas_transparencia polygon').css('display', 'none');
        $('#lineas .line-polylang').css('display', 'none');
        $('#puntitos_con_linea circle').css('display', 'none');
        //id = 1, Ideas de negocio
        $('#puntitos .business').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.business').css('fill', '#ecbe31');
            $('#Textos .cls-2.business').css('fill', '#fff');
            $('#Textos .business-secondary').css('fill', '#00bde0');
            $('#transparencias .business').fadeIn();
            $('#lineas_transparencia .business').fadeIn();
            $('#lineas_azules .business').fadeIn();
            $('.info-block#text1').fadeIn();
            $('#puntitos_con_linea .business').fadeIn();
        });
        $('#puntitos_con_linea .business-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.business').css('fill', '#ecbe31');
            $('#Textos .cls-2.business').css('fill', '#fff');
            $('#Textos .business-secondary').css('fill', '#00bde0');
            $('#transparencias .business').fadeIn();
            $('#lineas_transparencia .business').fadeIn();
            $('#lineas_azules .business').fadeIn();
            $('.info-block#text1').fadeIn();
            $('#puntitos_con_linea .business').fadeIn();
        });

        //id = 2, Diseño web, marketing, programación
        $('#puntitos .web').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.web').css('fill', '#ecbe31');
            $('#lineas_amarillas .web').fadeIn();
            $('#Textos .cls-2.web').css('fill', '#fff');
            $('#Textos .web-secondary').css('fill', '#00bde0');
            $('#puntitos_con_linea .web').fadeIn();
            $('#lineas_azules .web').fadeIn();
            $('#transparencias .web').fadeIn();
            $('#lineas_transparencia .web').fadeIn();
            $('.info-block#text2').fadeIn();
        });
        $('#puntitos_con_linea .web-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.web').css('fill', '#ecbe31');
            $('#lineas_amarillas .web').fadeIn();
            $('#Textos .cls-2.web').css('fill', '#fff');
            $('#Textos .web-secondary').css('fill', '#00bde0');
            $('#puntitos_con_linea .web').fadeIn();
            $('#lineas_azules .web').fadeIn();
            $('#transparencias .web').fadeIn();
            $('#lineas_transparencia .web').fadeIn();
            $('.info-block#text2').fadeIn();
        });

        //id = 3, SEO, SEA, Adwords
        $('#puntitos .seo').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.seo').css('fill', '#ecbe31');
            $('#lineas_amarillas .seo').fadeIn();
            $('#Textos .cls-2.seo').css('fill', '#fff');
            $('#Textos .seo-secondary').css('fill', '#00bde0');
            $('#transparencias .seo').fadeIn();
            $('#lineas_transparencia .seo').fadeIn();
            $('#lineas_azules .seo').fadeIn();
            $('#puntitos_con_linea .seo').fadeIn();
            $('.info-block#text3').fadeIn();
        });
        $('#puntitos_con_linea .seo-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .cls-26.seo').css('fill', '#ecbe31');
            $('#lineas_amarillas .seo').fadeIn();
            $('#Textos .cls-2.seo').css('fill', '#fff');
            $('#Textos .seo-secondary').css('fill', '#00bde0');
            $('#transparencias .seo').fadeIn();
            $('#lineas_transparencia .seo').fadeIn();
            $('#lineas_azules .seo').fadeIn();
            $('#puntitos_con_linea .seo').fadeIn();
            $('.info-block#text3').fadeIn();
        });

        //id = 4, Publicidad online y remarketing
        $('#puntitos .online').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .online').css('fill', '#ecbe31');
            $('#Textos .cls-2.online').css('fill', '#fff');
            $('#Textos .online-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .online').fadeIn();
            $('#lineas_azules .online').fadeIn();
            $('#puntitos_con_linea .online').fadeIn();
            $('#transparencias .online').fadeIn();
            $('#lineas_transparencia .online').fadeIn();
            $('.info-block#text4').fadeIn();

        });
        $('#puntitos_con_linea .online-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .online').css('fill', '#ecbe31');
            $('#Textos .cls-2.online').css('fill', '#fff');
            $('#Textos .online-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .online').fadeIn();
            $('#lineas_azules .online').fadeIn();
            $('#puntitos_con_linea .online').fadeIn();
            $('#transparencias .online').fadeIn();
            $('#lineas_transparencia .online').fadeIn();
            $('.info-block#text4').fadeIn();
        });

        //id = 5, Social Media Ads
        $('#puntitos .media').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .media').css('fill', '#ecbe31');
            $('#Textos .cls-2.media').css('fill', '#fff');
            $('#Textos .media-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .media').fadeIn();
            $('#lineas_azules .media').fadeIn();
            $('#puntitos_con_linea .media').fadeIn();
            $('#transparencias .media').fadeIn();
            $('#lineas_transparencia .media').fadeIn();
            $('.info-block#text5').fadeIn();
        });
        $('#puntitos_con_linea .media-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .media').css('fill', '#ecbe31');
            $('#Textos .cls-2.media').css('fill', '#fff');
            $('#Textos .media-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .media').fadeIn();
            $('#lineas_azules .media').fadeIn();
            $('#puntitos_con_linea .media').fadeIn();
            $('#transparencias .media').fadeIn();
            $('#lineas_transparencia .media').fadeIn();
            $('.info-block#text5').fadeIn();
        });

        //id = 6, Medios e influencers
        $('#puntitos .influ').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .influ').css('fill', '#ecbe31');
            $('#Textos .cls-2.influ').css('fill', '#fff');
            $('#Textos .influ-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .influ').fadeIn();
            $('#lineas_azules .influ').fadeIn();
            $('#puntitos_con_linea .influ').fadeIn();
            $('#transparencias .influ').fadeIn();
            $('#lineas_transparencia .influ').fadeIn();
            $('.info-block#text6').fadeIn();
        });
        $('#puntitos_con_linea .influ-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .influ').css('fill', '#ecbe31');
            $('#Textos .cls-2.influ').css('fill', '#fff');
            $('#Textos .influ-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .influ').fadeIn();
            $('#lineas_azules .influ').fadeIn();
            $('#puntitos_con_linea .influ').fadeIn();
            $('#transparencias .influ').fadeIn();
            $('#lineas_transparencia .influ').fadeIn();
            $('.info-block#text6').fadeIn();
        });

        //id = 7, Automation, Inbound Marketing, Mail
        $('#puntitos .mark').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .mark').css('fill', '#ecbe31');
            $('#Textos .cls-2.mark').css('fill', '#fff');
            $('#Textos .mark-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .mark').fadeIn();
            $('#lineas_azules .mark').fadeIn();
            $('#puntitos_con_linea .mark').fadeIn();
            $('#transparencias .mark').fadeIn();
            $('#lineas_transparencia .mark').fadeIn();
            $('.info-block#text7').fadeIn();
        });
        $('#puntitos_con_linea .mark-boton').click(function () {
            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            $('#Textos text').css('fill', '#036785');
            $('#puntitos circle').css('fill', '#036785');
            $('.infographics .info-block').css('display', 'none');

            $('#puntitos .mark').css('fill', '#ecbe31');
            $('#Textos .cls-2.mark').css('fill', '#fff');
            $('#Textos .mark-secondary').css('fill', '#00bde0');
            $('#lineas_amarillas .mark').fadeIn();
            $('#lineas_azules .mark').fadeIn();
            $('#puntitos_con_linea .mark').fadeIn();
            $('#transparencias .mark').fadeIn();
            $('#lineas_transparencia .mark').fadeIn();
            $('.info-block#text7').fadeIn();
        });
    });
</script>
@endsection

@section('titles')
    <title>Thatzad</title>
    <meta name="description" content="">
@endsection
