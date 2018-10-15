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
                            <p class="text-grand">En Thatzad nos sentimos tremendamente orgullosos de hacer crecer tu negocio digital</p>
                            <p>Entendiendo bien tu mercado, tu organización y las necesidades de tu proyecto. Con más de {{ $age }} años de experiencia para llegar por el canal más rentable a tu cliente objetivo.</p>
                            <p>Desarrollamos la estrategia, la web y las campañas de publicidad con un equipo creativo, implicado y 100% efectivo.</p>
                        </div>
                        <div class="white-box">
                            <h1>Somos tu agencia boutique de marketing online</h1>
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
                        <div class="info-block" id="text0" data-text="0">
                            {{--<div class="downArrow bounce">--}}
                            {{--<img style="max-width: 23px;color: #fff;" src="{{ asset('front/img/home/right-arrow-angle.png') }}" alt="">--}}
                            {{--<svg style="max-width: 23px;color: #fff;" aria-hidden="true" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>--}}
                            {{--</div>--}}
                            <p>Para que una acción de eMarketing tenga éxito de verdad, debe estar coordinada con otras acciones que apoyen una estrategia integral. Existe una interrelación muy fuerte entre ciertas estrategias. En <b>THATZAD</b> tenemos la visión global para que TODO tenga sentido.</p>
                            <p class="text-general">Clica en los diferentes servicios y descubre todo lo que podemos hacer con tu proyecto</p>
                            <div class="downArrow bounce">
                                {{--<img style="max-width: 23px;color: #fff;" src="{{ asset('front/img/home/right-arrow-angle.png') }}" alt="">--}}
                                <svg style="max-width: 23px;color: #fff;" aria-hidden="true" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                            </div>
                        </div>
                        <div class="info-block" id="text1" data-text="1">
                            <p class="text-bg business">Ideas de negocio</p>
                            <p class="title-info">Ideas de negocio/Bussines plan</p>
                            <div class="info-descr">
                                <p class="text-info">Todo proyecto se inicia con una idea de negocio y plan de marketing. Dominamos el medio, <span>llevamos más de {{ $age }} años haciendo crecer negocios online como el tuyo.</span> Hemos aprendido de los éxitos, pero también de los fracasos. Conocemos las tendencias, sabemos hacia dónde se dirige el futuro. Podemos ayudarte a darle forma a tu idea y diseñar la estrategia que necesitas para cumplir tus objetivos.</p>
                                <p class="link-service"><a href="{{ route('service','consultoria-de-emarketing-y-desarrollo-de-estrategia') }}">Saber más de Consultoría de e‑Marketing&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text2" data-text="2">
                            <p class="text-bg diseno">Diseño web y usabilidad</p>
                            <p class="text-bg programacion">Programación<br> web</p>
                            <p class="text-bg marketing">Marketing web</p>
                            <p class="title-info">Programación web <span class="line-title">Marketing web</span>Diseño web y usabilidad<span class="line-title"></span></p>
                            <div class="info-descr">
                                <p class="text-info">Una web, eCommerce o portal son siempre una pieza clave, pero sólo la primera de una proyecto mucho mayor. Ideamos, <span>diseñamos y programamos proyectos web realmente diferentes.</span> Proyectos totalmente a medida, creados sobre un lienzo en blanco con un equipo interdisciplinar de marketing, diseño y programación. </p>
                                <p class="link-service"><a href="{{ route('service','desarrollo-web-a-medida') }}">Saber más de Programación web&nbsp;></a></p>
                                <p class="link-service last"><a href="{{ route('service','agencia-diseno-web') }}">Saber más de Diseño web y usabilidad&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text3" data-text="3">
                            <p class="text-bg soloseo">SEO</p>
                            <p class="text-bg sea">SEA. Google Ads</p>
                            <p class="title-info">SEO <span class="line-title">SEA. Google Ads</span></p>
                            <div class="info-descr">
                                <p class="text-info"><span>Somos Google Premier Partner,</span>
                                    <img style="max-width: 163px;display: block;margin-bottom: 10px;margin-top: 10px;" src="{{ asset('front/img/primer-google.png') }}" alt="">
                                    Sabemos la importancia de una web perfectamente adaptada para Google, tanto a nivel SEO como para optimizar Adwords. La estrategia de keywords nos marcará la arquitectura de la web, así que nos gusta que sea uno de los primeros drivers de plan de eMarketing.</p>
                                <p class="link-service"><a href="{{ route('service','agencia-seo') }}">Saber más de SEO&nbsp;></a></p>
                                <p class="link-service last"><a href="{{ route('service','agencia-google-ads') }}">Saber más de SEA. Google Ads&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text4" data-text="4">
                            <p class="text-bg publicidad">Publicidad online</p>
                            <p class="text-bg remarketing">Remarketing</p>
                            <div class="info-descr">
                                <p class="title-info">Publicidad online <span class="line-title">Remarketing</span></p>
                                <p class="text-info">Creamos <span>campañas de publicidad online que conectan exactamente con ese cliente que buscas.</span> El objetivo es atraer tráfico cualificado que genere conversiones y ventas, para alcanzarlo, ideamos campañas display efectivas, acciones de remarketing multi fase, que consigan la venta por impulso o que vayan enamorando poco a poco, dependerá de la estrategia.</p>
                                <p class="link-service"><a href="{{ route('service','agencia-publicidad-online-barcelona') }}">Saber más de Publicidad online&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text5" data-text="5">
                            <p class="text-bg media">Social Ads</p>
                            <p class="title-info">Social Ads</p>
                            <div class="info-descr">
                                <p class="text-info">Las Redes sociales nos permiten crear campañas online conociendo muy bien al cliente potencial al que nos dirigimos. Creamos campañas de <span>Social Ads con un equipo especialista, experimentado, creativo y orientado totalmente a objetivos.</span></p>
                                <p class="link-service"><a href="{{ route('service','agencia-social-ads') }}">Saber más de Social Ads&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text6" data-text="6">
                            <p class="text-bg influ">Medios e influencers</p>
                            <p class="title-info">Medios e influencers</p>
                            <div class="info-descr">
                                <p class="text-info">Quien conozca los entresijos de internet sabrá que los medios online y los influencers son un canal de altísimo impacto con un lenguaje propio. Campañas de content marketing que combinadas con estrategias de remarketing e inbound <span>son la clave del éxito en el lanzamiento de marcas.</span></p>
                                <p class="link-service"><a href="{{ route('service','agencia-medios-online') }}">Saber más de Medios e influencers&nbsp;></a></p>
                            </div>
                        </div>
                        <div class="info-block" id="text7" data-text="7">
                            <p class="text-bg automation">Automation marketing</p>
                            <p class="text-bg mail">Mail Marketing</p>
                            <p class="text-bg inbound">Inbound Marketing</p>
                            <p class="title-info">Inbound Marketing <span class="line-title">Mail Marketing</span> <span class="line-title">Automation marketing</span></p>
                            <div class="info-descr">
                                <p class="text-info">Inbound & Automation marketing. La tecnología nos ayuda a saber exactamente que ha motivado a un usuario a interactuar con nosotros. <span>Diseñamos estrategias para atraer a un cliente concreto</span> y posteriormente ir persuadiéndole poco a poco y en diferentes medios, con contenidos adaptados a él.</p>
                                <p class="link-service"><a href="{{ route('service','agencia-inbound-marketing') }}">Saber más de Inbound marketing&nbsp;></a></p>
                                <p class="link-service last"><a href="{{ route('service','agencia-automation-marketing') }}">Saber más de Automation marketing&nbsp;></a></p>
                            </div>
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
                                <p data-animated="fadeInUp">Proyectos de eCommerce</p>
                                <div data-animated="fadeInUp" class="btn-yellow">Cómo hacer crecer tu negocio</div>
                                <div  class="line-yellow line-bottom"></div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-3 col-special">
                        <a href="{{ route('specialization3') }}">
                            <div class="inner-special third-special">
                                <div class="line-yellow"></div>
                                <p  data-animated="fadeInUp">eMarketing y publicidad para marcas</p>
                                <div  data-animated="fadeInUp" class="btn-yellow">Hagamos que tu marca triunfe</div>
                                <div class="line-yellow line-bottom"></div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-3 col-special">
                        <a href="{{ route('specialization2') }}">
                            <div class="inner-special second-special">
                                <div class="line-yellow"></div>
                                <p data-animated="fadeInUp">Publicidad online orientada a resultados</p>
                                <div data-animated="fadeInUp" class="btn-yellow big">Consigue los resultados que buscas</div>
                                <div class="line-yellow line-bottom"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-special">
                        <a href="{{ route('specialization4') }}">
                            <div class="inner-special first-special">
                                <div class="line-yellow"></div>
                                <p data-animated="fadeInUp">Transformación digital para empresas</p>
                                <div data-animated="fadeInUp" class="btn-yellow big">Descubre hasta dónde podemos llegar juntos</div>
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
                            <p class="title-whitepaper">{{ $whitepaper->title }}</p>
                            <div class="text">{!! $whitepaper->description !!}</div>
                            <a href="{{ route('detailwhitepaper', $whitepaper->slug) }}"><div class="btn-yellow-full">Leer más</div></a>
                        </div>
                        <div class="col-md-5 right-col-whitepaper" >
                            {{--                        <img src="{{ $whitepaper->image }}" alt="">--}}
                            <div class="img-block" style="background: url({{ $whitepaper->image }}) center center no-repeat;height: 300px;background-size: cover;">

                            </div>
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
                        <div class="btn-blue"><a target="_blank" href="http://www.thatzblog.com/">Ver todos los artículos ></a></div>
                    </div>
                    <div class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 newsletter">
                        <div class="inner-text">
                            <p class="thatznews">Apúntate a las ThatzNews. Jamás de aburriremos</p>
                        </div>
                        <form action="" method="post" id="form_newsletter">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input style="display: none;" type="text" name="lastname" id="lastname">
                            <div class="inner-input">
                                <p class="msg-error">Email tiene que ser válido</p>
                                <input type="text" name="email" id="email" placeholder="Email">
                                <p class="politica">Consulta nuestra <a target="_blank" href="{{ route('generals') }}">política de privacidad</a></p>
                            </div>
                            <div id="send" class="btn-yellow-full">Apuntarme</div>
                        </form>
                    </div>
                </div>
                <?php $i = 1; ?>
                @foreach($posts as $post)
                    @if($i <= 3)
                        <div class="col-md-4 col-article" data-animated="fadeInUp">
                            @if(isset($post->thumbnail_images->full->url))
                                <div style="height:350px;background: url({{ $post->thumbnail_images->full->url }}) center center no-repeat; background-size: cover;">
                                </div>
                            @else
                                <div style="height:350px;background: url({{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}) center center no-repeat;background-size: cover;">

                                </div>
                            @endif

                            <div class="article-block">
                                <p class="title-article">{{ $post->title }}</p>
                                <div class="article-text">{!! $post->excerpt !!}</div>
                                <div class="more"><a href="{{ $post->url }}" target="_blank">Leer más <span>></span></a></div>
                            </div>
                        </div>
                    @endif
                    <?php $i++; ?>
                @endforeach
                {{--<div class="col-md-4 col-article" data-animated="fadeInUp">--}}
                {{--<img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">--}}
                {{--<div class="article-block">--}}
                {{--<p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>--}}
                {{--<p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>--}}
                {{--<div class="more"><a href="">Leer más <span>></span></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-article" data-animated="fadeInUp">--}}
                {{--<img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">--}}
                {{--<div class="article-block">--}}
                {{--<p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>--}}
                {{--<p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>--}}
                {{--<div class="more"><a href="">Leer más <span>></span></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-article" data-animated="fadeInUp">--}}
                {{--<img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">--}}
                {{--<div class="article-block">--}}
                {{--<p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>--}}
                {{--<p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>--}}
                {{--<div class="more"><a href="">Leer más <span>></span></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}


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

            $("#burger img").attr("src","{{ asset('front/img/header/burger.png') }}");
            $('.cls-8').click(function(){
            });

            $("#send").click(function(e){
                e.preventDefault();
                var error = 0;
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test($('#email').val())) {
                    error = 1;
                    $('#email').parent().find('.msg-error').fadeIn();
                    $('#email').addClass('not-correct');
                }else{
                    $('#email').parent().find('.msg-error').fadeOut();
                    $('#email').removeClass('not-correct');
                }
                if (error === 0){
                    $.ajax({
                        type: 'post',
                        url: '{{ action('NewsletterController@postNewsletter') }}',
                        data: $('#form_newsletter').serialize(),
                        success: function(response) {
                            $('#form_newsletter').trigger("reset");
                            // $('#privacy').prop('checked', false);
                            if (response === 'sent'){
                                $('.thatznews').html('Gracias por apuntarte a nuestra newsletter!');
                                $('.thatznews').css('color', ' var(--main-blue)');
                            }
                        },
                        error: function(e){
                            console.log(e);
                        }
                    });
                }
            });

            $("#burger, #mobile-close").click(function(){
                $("#header").toggleClass('header_transparent');
            });

            $('#infografia #transparencias polygon').css('display', 'none');
            $('#infografia #lineas_amarillas path').css('display', 'none');
            $('#infografia #lineas_azules path').css('display', 'none');
            $('#lineas polyline').css('display', 'none');
            $('#lineas_transparencia polygon').css('display', 'none');
            $('#lineas .line-polylang').css('display', 'none');
            $('#puntitos_con_linea circle').css('display', 'none');
            //id = 1, Ideas de negocio
            $('#puntitos .business, text.business, #puntitos_con_linea .business-boton').hover(function () {
                $("#text1 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text1 .text-bg").css('display', 'none');
                $("#text1 .text-bg."+name).fadeIn();
                var style = $('#puntitos .business').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });

            //id = 2, Diseño web, marketing, programación
            $('#puntitos .web, text.web, #puntitos_con_linea .web-boton').hover(function () {
                $("#text2 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text2 .text-bg").css('display', 'none');
                $("#text2 .text-bg."+name).fadeIn();
                var style = $('#puntitos .web').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });

            //id = 3, SEO, SEA, Adwords
            $('#puntitos .seo, text.seo, #puntitos_con_linea .seo-boton').hover(function () {
                $("#text3 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text3 .text-bg").css('display', 'none');
                $("#text3 .text-bg."+name).fadeIn();
                var style = $('#puntitos .seo').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });

            //id = 4, Publicidad online y remarketing
            $('#puntitos .online, text.online, #puntitos_con_linea .online-boton').hover(function () {
                $("#text4 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text4 .text-bg").css('display', 'none');
                $("#text4 .text-bg."+name).fadeIn();
                var style = $('#puntitos .online').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });
            //id = 5, Social Media Ads
            $('#puntitos .media, text.media, #puntitos_con_linea .media-boton').hover(function () {
                $("#text5 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text5 .text-bg").css('display', 'none');
                $("#text5 .text-bg."+name).fadeIn();
                var style = $('#puntitos .media').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });

            //id = 6, Medios e influencers
            $('#puntitos .influ, text.influ, #puntitos_con_linea .influ-boton').hover(function () {
                $("#text6 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text6 .text-bg").css('display', 'none');
                $("#text6 .text-bg."+name).fadeIn();
                var style = $('#puntitos .influ').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });

            //id = 7, Automation, Inbound Marketing, Mail
            $('#puntitos .mark, text.mark, #puntitos_con_linea .mark-boton').hover(function () {
                $("#text7 .title-info").addClass('mouseenter');
                $(".col-md-4.text-info h2").addClass('text-grey');
                var name = $(this).attr("data-id");
                $("#text7 .text-bg").css('display', 'none');
                $("#text7 .text-bg."+name).fadeIn();
                var style = $('#puntitos .mark').attr("style");
                if(style != "fill: rgb(236, 190, 49);" ){
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
                }
            });
            //default
            $(".row.inner-info").mouseleave(function () {
                $("#text1 .title-info,#text2 .title-info,#text3 .title-info,#text4 .title-info,#text5 .title-info,#text6 .title-info,#text7 .title-info").removeClass('mouseenter');
                $('#Textos text').css('fill', '#036785');
                $('#puntitos circle').css('fill', '#036785');
                $(".col-md-4.text-info h2").removeClass('text-grey');
                $('#infografia #transparencias polygon').css('display', 'none');
                $('#infografia #lineas_amarillas path').css('display', 'none');
                $('#infografia #lineas_azules path').css('display', 'none');
                $('#lineas polyline').css('display', 'none');
                $('#lineas_transparencia polygon').css('display', 'none');
                $('#lineas .line-polylang').css('display', 'none');
                $('#puntitos_con_linea circle').css('display', 'none');
                $(".info-block#text0").fadeIn();
                $(".info-block#text1,.info-block#text2,.info-block#text3,.info-block#text4,.info-block#text5,.info-block#text6,.info-block#text7").hide();


            });

            $('#infografia text, #infografia circle').click(function (e) {
                $url = $(this).attr('data-url');
                if(typeof $url === "undefined"){
                    e.preventDefault();
                }else{
                    window.location = $url;
                }
            });


            //Infografía en móvil
            var mobileScreen = $(window).width();
            if (mobileScreen < 993) {
                $('.infographics .title-info').after().click(function(){
                    $('.info-block .info-descr').fadeOut();
                    $(this).parent().find('.info-descr').fadeIn();
                });
                $('.infographics .info-block .info-descr').after().click(function(){
                    // $('.info-block .text-info').fadeOut();
                    $(this).fadeOut();
                });
            }

            // $(window).bind('scroll',function(e){
            //     parallaxScroll();
            // });
            //
            // function parallaxScroll(){
            //     var scrolled = $(window).scrollTop();
            //     $('.section.home .right-col').css('top',(0-(scrolled*.25))+'px');
            //     // $('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
            //     $('section.home .top').css('top',(0-(scrolled*.175))+'px');
            // }
        });
    </script>
@endsection

@section('titles')
    <title>Agencia marketing online Barcelona | Thatzad</title>
    <meta name="description" content="Un equipo de marketing online creativo, implicado y 100% efectivo para desarrollar la estrategia, la web y campañas de publicidad online. That's Advertising!">
@endsection
