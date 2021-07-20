@extends('front.layouts.master')

@section('content')

    <section class="landing-agencia-marketing">
        <div class="top-agency">
            <div class="container">
                <div class="row">
                    <p class="name-page col-md-8">La agencia de marketing para ecommerce</p>
                </div>
                <div class="row">
                    <h1 class="title col-md-8">Los beneficios de vuestro ecommerce son escalables, vayamos un paso más</h1>
                </div>
                <div class="row">
                    <h2 class="subtitle col-md-6" data-animated="fadeInUp">
                        En un mercado online cada vez más maduro, la optimización de vuestro ecommerce y su estrategia de marketing es clave para entrar en beneficios.
                        <br><br>
                        Eso significa que hemos de analizar cada funcionalidad, cada imagen, texto o cada acción de marketing para orientarlo a vender vuestro producto y vuestra marca.
                        <br><br>
                        Cuando la competencia es fuerte ya no sirve con tener una tienda online y una campaña en Insta, hemos de tener la mejor tienda y las mejores campañas en aquellos canales que ofrezcan rentabilidad.
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="btn-yellow-full"><a href="#contact-block">¿Empezamos?</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-1-agency" data-animated="fadeInUp">
            <div class="container">
                <div class="row ecommerce-description">
                    <div class="desc-info col-md-6" data-animated="fadeInLeft">
                        <div class="element-ecommerce-description">
                            <p class="title-section">Desarrollamos ecommerce a medida que venden de verdad</p>
                            <p class="description-section">
                                En <b>THATZAD</b> llevamos más de 15 años entendiendo cada negocio y desarrollando proyectos únicos que permitan poner en valor vuestra marca. <span>Cuidando hasta el último detalle</span>, desde el diseño gráfico, los mensajes clave o la usabilidad.
                                <br><br>
                                Apoyando la estrategia ecommerce con campañas de marketing online orientadas a resultados, que no generan visitantes, generan compradores.
                            </p>
                        </div>
                        <div class="element-ecommerce-description">
                            <p class="title-section">Ideas de éxito para cada sector</p>
                            <p class="description-section">
                                Pocas agencias gestionan bien la diferencia entre una tienda online de moda, una de hogar, una de alimentación o un ecommerce B2B para el sector industrial. En <b>THATZAD</b> profundizamos en el sector al que pertenezca vuestro negocio y <span>adaptamos la estrategia para entender vuestros productos, vuestros clientes y sus procesos de compra.</span>
                            </p>
                        </div>
                    </div>
                    <div class="img-info col-md-6" data-animated="fadeInRight">
                        <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/image-container-1.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-2-agency bg-stripers" data-animated="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title-section">Las últimas tiendas online con las he hemos ido una paso más…</p>
                    </div>
                    <div class="col-12 container-proyectos">
                        <div class="row">
                            <div class="col-md-7 element-img">
                                <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/proyect-1.png') }}">
                            </div>
                            <div class="col-md-5 element-description">
                                <p class="title">The Eleven House</p>
                                <p class="subtitle">
                                    Es mucho más que una casa, es un concepto de vida que se refleja en los eventos, las exposiciones y los productos de hogar que venden en su tienda online. La complejidad gráfica era trasladar esa atmósfera, utilizamos una navegación de “Inspírate” que mezclamos en la página de categoría para dar mucha más riqueza al producto.
                                </p>
                                <div class="link">
                                    <a href="https://www.theelevenhouse.com/" target="_blank">
                                        Visita la web
                                        <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/link.svg') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 element-img mobile">
                                <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/proyect-2.png') }}">
                            </div>
                            <div class="col-md-5 element-description">
                                <p class="title">La Eco Tribu</p>
                                <p class="subtitle">
                                    El sector de productos Ecológicos vive un boom y destacar de la competencia requiere ideas creativas. Con la programación a medida, hicimos que los usuarios sucritos puedan configurarse cada mes su cesta, tengan descuentos adicionales y no paguen por los envases. Reglas de negocio complejas para dar el mejor servicio a sus Clientes, pero siempre garantizando la usabilidad de toda la experiencia de compra.
                                </p>
                                <div class="link">
                                    <a href="https://laecotribu.com/" target="_blank">
                                        Visita la web
                                        <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/link.svg') }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 element-img destkop">
                                <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/proyect-2.png') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 element-img">
                                <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/proyect-3.png') }}">
                            </div>
                            <div class="col-md-5 element-description">
                                <p class="title">Mi&Co</p>
                                <p class="subtitle">
                                    Tener un producto espectacular y un equipazo detrás son clave para que los niveles de facturación de esta conocida marca de ropa suban a doble dígito temporada a temporada. Y otra piedra de apoyo son una buena tienda y campañas muy bien pensadas, muy bien diseñadas y con una dedicación constante por nuestra parte.
                                </p>
                                <div class="link">
                                    <a href="https://www.miandco.es/" target="_blank">
                                        Visita la web
                                        <img src="{{ asset('front/img/landings/agencia-marketing-e-commerce/link.svg') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p class="title-end-section">
                            Y vuestro ecommerce,<br>
                            ¿está preparado para vender de verdad?
                        </p>
                        <div class="line-after-title"></div>
                    </div>

                </div>
            </div>
        </div>
        <div id="contact-block" class="contact-block">
            <div class="row" style="margin: 0">
                <div class="col-md-12">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <p class="big-title">Conozcámonos y os explicaremos las ideas que tenemos para vuestro ecommerce</p>
                        <div class="line-horizontal desktop"></div>
                        <div class="contact-container desktop">
                            <p class="title-contact">O contactadnos</p>
                            <a href="tel:0034936350620">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M498.827,377.633l-63.649-63.649c-17.548-17.547-46.102-17.547-63.649,0l-28.931,28.931
                                        c-13.294,13.294-34.926,13.29-48.215,0.005l-125.4-125.507c-13.325-13.325-13.327-34.892,0-48.219
                                        c4.66-4.66,18.041-18.041,28.931-28.931c17.471-17.47,17.715-45.935-0.017-63.665l-63.632-63.432
                                        C116.717-4.381,88.164-4.381,70.663,13.12C57.567,26.102,53.343,30.29,47.471,36.111c-63.28,63.279-63.28,166.242-0.003,229.519
                                        l198.692,198.796c63.428,63.429,166.088,63.434,229.521,0l23.146-23.145C516.375,423.733,516.375,395.181,498.827,377.633z
                                         M91.833,34.382c5.849-5.849,15.365-5.85,21.233,0.016l63.632,63.432c5.863,5.863,5.863,15.352,0,21.216l-10.609,10.608
                                        l-84.81-84.81L91.833,34.382z M267.38,443.213L68.687,244.415c-48.958-48.958-51.649-125.833-8.276-178.006l84.564,84.564
                                        c-22.22,25.189-21.294,63.572,2.787,87.653l125.396,125.501c0.001,0.001,0.003,0.003,0.004,0.004
                                        c24.055,24.056,62.436,25.042,87.656,2.792l84.566,84.566C393.377,494.787,316.675,492.508,267.38,443.213z M477.612,420.065
                                        l-10.609,10.609l-84.865-84.866l10.607-10.608c5.85-5.849,15.367-5.85,21.217,0l63.649,63.649
                                        C483.461,404.699,483.461,414.217,477.612,420.065z"/>
                                </g>
                            </g>
                        </svg>
                                +34 936 350 620</a>

                            <br><br>
                            <a href="mailto:hola@thatzad.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 332 332"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill-rule:evenodd;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Forma_1" data-name="Forma 1" class="cls-1"><g id="Forma_1-2" data-name="Forma 1"><path class="cls-2" d="M165,0C74,0,0,74,0,165c0,91.32,73.87,167,165,167,36.87,0,74.17-12.39,102.34-34a15,15,0,0,0-18.26-23.8c-23,17.67-53.67,28-84.08,28C90.56,302.2,30,240.54,30,165,30,90.56,90.56,29.8,165,29.8c75.54,0,137,60.76,137,135.2v15a30,30,0,0,1-60,0V105a15,15,0,0,0-30,0v1a77.29,77.29,0,0,0-47-16,75,75,0,0,0,0,150,77.67,77.67,0,0,0,57.73-25.81A60,60,0,0,0,332,180V165C332,73.75,256.21,0,165,0Zm0,210.2a45.2,45.2,0,0,1,0-90.4c25.48,0,47,20.81,47,45.2S190.48,210.2,165,210.2Z"/></g></g></g></svg> hola@thatzad.com</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-block">
                            <form method="POST" action="" id="contactform">
                                <div class="send" id="response"></div>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <input class="form-control required" type="text" name="name" id="name" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input class="form-control required" type="text" name="web" id="web" placeholder="Web">
                                </div>
                                <div class="form-group">
                                    <input class="form-control required" type="text" name="email" id="email" placeholder="Email (obligatorio)">
                                    <p style="margin-top:0px; margin-bottom: -13px;" class="msg-error">El formato de email no es correcto</p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="telf" id="telf" placeholder="Teléfono">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="newsletter" value="1" id="newsletter" class="gray-radio"/>
                                        <label for="newsletter" class="white-radio-label">Acepto suscribirme a la newsletter de esta web.</label>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="gray-radio" type="checkbox" name="privacy" id="privacy" value="1">
                                        <label for="privacy" class="white-radio-label">Acepto <a style="color: #fff;font-weight: 700;" href="{{ route('generals') }}" target="_blank">la política de privacidad</a> aplicada en esta web.</label>
                                        <p style="margin-top: -10px;" class="msg-error">Tienes que aceptar nuestra política de privacidad</p>
                                    </label>
                                </div>
                                <input class="submit btn-yellow-full" type="button" id="send" value="Enviar">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="line-horizontal mobile"></div>
                        <div class="contact-container mobile">
                            <p class="title-contact">O contactadnos</p>
                            <a href="">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M498.827,377.633l-63.649-63.649c-17.548-17.547-46.102-17.547-63.649,0l-28.931,28.931
                                        c-13.294,13.294-34.926,13.29-48.215,0.005l-125.4-125.507c-13.325-13.325-13.327-34.892,0-48.219
                                        c4.66-4.66,18.041-18.041,28.931-28.931c17.471-17.47,17.715-45.935-0.017-63.665l-63.632-63.432
                                        C116.717-4.381,88.164-4.381,70.663,13.12C57.567,26.102,53.343,30.29,47.471,36.111c-63.28,63.279-63.28,166.242-0.003,229.519
                                        l198.692,198.796c63.428,63.429,166.088,63.434,229.521,0l23.146-23.145C516.375,423.733,516.375,395.181,498.827,377.633z
                                         M91.833,34.382c5.849-5.849,15.365-5.85,21.233,0.016l63.632,63.432c5.863,5.863,5.863,15.352,0,21.216l-10.609,10.608
                                        l-84.81-84.81L91.833,34.382z M267.38,443.213L68.687,244.415c-48.958-48.958-51.649-125.833-8.276-178.006l84.564,84.564
                                        c-22.22,25.189-21.294,63.572,2.787,87.653l125.396,125.501c0.001,0.001,0.003,0.003,0.004,0.004
                                        c24.055,24.056,62.436,25.042,87.656,2.792l84.566,84.566C393.377,494.787,316.675,492.508,267.38,443.213z M477.612,420.065
                                        l-10.609,10.609l-84.865-84.866l10.607-10.608c5.85-5.849,15.367-5.85,21.217,0l63.649,63.649
                                        C483.461,404.699,483.461,414.217,477.612,420.065z"/>
                                </g>
                            </g>
                        </svg>
                                +34 936 350 620</a>

                            <br><br>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 332 332"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill-rule:evenodd;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Forma_1" data-name="Forma 1" class="cls-1"><g id="Forma_1-2" data-name="Forma 1"><path class="cls-2" d="M165,0C74,0,0,74,0,165c0,91.32,73.87,167,165,167,36.87,0,74.17-12.39,102.34-34a15,15,0,0,0-18.26-23.8c-23,17.67-53.67,28-84.08,28C90.56,302.2,30,240.54,30,165,30,90.56,90.56,29.8,165,29.8c75.54,0,137,60.76,137,135.2v15a30,30,0,0,1-60,0V105a15,15,0,0,0-30,0v1a77.29,77.29,0,0,0-47-16,75,75,0,0,0,0,150,77.67,77.67,0,0,0,57.73-25.81A60,60,0,0,0,332,180V165C332,73.75,256.21,0,165,0Zm0,210.2a45.2,45.2,0,0,1,0-90.4c25.48,0,47,20.81,47,45.2S190.48,210.2,165,210.2Z"/></g></g></g></svg> hola@thatzad.com</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@stop

@section('titles')
    <title>La mejor agencia de marketing para ecommerce en Barcelona, sin duda</title>
    <meta name="description" content="En Thatzad llevamos 15 años cosechando éxitos y sabemos que los beneficios de vuestro ecommerce son escalables, vayamos un paso más">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('front/slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#header").addClass('header_transparent');
            $("#header").addClass('header_home');
            $("#header").addClass('header_landing');
            $('#header').css('position', 'absolute');
            $(".img-logo").attr("src","front/img/header/logotipo-blanco.png");
            $("#burger, #mobile-close").click(function(){
                if($(".img-logo").attr("src") == "front/img/header/logotipo-blanco.png"){
                    $(".img-logo").attr("src","front/img/header/logotipo.png");
                }else{
                    $(".img-logo").attr("src","front/img/header/logotipo-blanco.png");
                }

            });
            $("#send").click(function(e){
                e.preventDefault();
                var error = 0;

                if (!$('#privacy').attr('checked')){
                    error = 1;
                    $('#privacy').parent().find('.white-radio-label').addClass('not-correct');
                    $("#privacy").next().next().fadeIn();
                }else{
                    $('#privacy').next().next().fadeOut();
                    $('#privacy').parent().find('.white-radio-label').removeClass('not-correct');
                }
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test($('#email').val())){
                    error = 1;
                    $("#email").next().fadeIn();
                    $('#email').addClass('not-correct');
                }else{
                    $('#email').next().fadeOut();
                    $('#email').removeClass('not-correct');
                }

                if (error === 0){
                    $.ajax({
                        type: 'post',
                        url: '{{ route('landingagenciaecommerce') }}',
                        data: $('#contactform').serialize(),
                        success: function(response) {
                            $('#contactform').trigger("reset");
                            $('#privacy').prop('checked', false);
                            if (response === 'sent'){
                                $('#response').html('Se ha enviado su solicitud correctamente');
                                $([document.documentElement, document.body]).animate({
                                    scrollTop: $("#response").offset().top
                                }, 500);
                            }
                        },
                        error: function(e){
                            console.log(e);
                        }
                    });
                }
            });


        });
    </script>
@endsection