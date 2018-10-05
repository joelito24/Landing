@extends('front.layouts.master')
@section('content')
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-page">Contacto</h1>
            </div>
            <div class="col-md-6" data-animated="fadeInLeft">

                <div class="text-contact">
                    <p>Nos encanta hablar de marketing online, campañas, eCommerce y proyectos digitales.</p>
                    <p>No te cortes. Por favor, explícanos tu negocio y pensaremos juntos la mejor forma de hacer que sea un éxito.</p>
                </div>
                <div class="contact-info">
                    <div class="info-text">
{{--                        <img src="{{ asset('front/img/contact/001-arroba.svg') }}" alt="">--}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 332 332"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill-rule:evenodd;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Forma_1" data-name="Forma 1" class="cls-1"><g id="Forma_1-2" data-name="Forma 1"><path class="cls-2" d="M165,0C74,0,0,74,0,165c0,91.32,73.87,167,165,167,36.87,0,74.17-12.39,102.34-34a15,15,0,0,0-18.26-23.8c-23,17.67-53.67,28-84.08,28C90.56,302.2,30,240.54,30,165,30,90.56,90.56,29.8,165,29.8c75.54,0,137,60.76,137,135.2v15a30,30,0,0,1-60,0V105a15,15,0,0,0-30,0v1a77.29,77.29,0,0,0-47-16,75,75,0,0,0,0,150,77.67,77.67,0,0,0,57.73-25.81A60,60,0,0,0,332,180V165C332,73.75,256.21,0,165,0Zm0,210.2a45.2,45.2,0,0,1,0-90.4c25.48,0,47,20.81,47,45.2S190.48,210.2,165,210.2Z"/></g></g></g></svg>
                        <img id="emailcontact" style="cursor: pointer;" src="{{ asset('front/img/hola-contact.png') }}" alt="">
                    </div>
                    <div class="info-text">
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
                        <a class="link-contact" href="">+34 936350620</a>
                    </div>
                    <div class="info-text">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257
                                        c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22
                                        C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34
                                        C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180
                                        C406.1,207.121,398.689,233.688,384.866,256.818z"/>
                                </g>
                            </g>
                                                        <g>
                                                            <g>
                                                                <path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z
                                         M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2
                                        C316.1,212.683,289.784,240.2,256,240.2z"/>
                                                            </g>
                                                        </g>
                        </svg>
                        <p>C/ Marqués de Mulhacen 11, bajos 2. 08034 Barcelona</p>
                        <a class="link-map" target="_blank" href="https://www.google.es/maps/place/Thatzad!+That's+Advertising./@41.3910271,2.1175009,17z/data=!3m1!4b1!4m5!3m4!1s0x12a482af16c1db65:0xd098ab6be5c69c5c!8m2!3d41.3910231!4d2.1196949?hl=es">Ver mapa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-block" data-animated="pulse">
                    <form method="POST" action="{{ action('ContactController@send') }}" id="contactform">
                        <div class="send" id="response"></div>
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <input placeholder="Nombre" class="form-control required" type="text" name="name" id="name">
                        </div>
                        {{--Campo oculto, no es para usuarios normales--}}
                        <div class="lastname">
                            <input placeholder="Apellido" type="text" name="lastname" id="lastname">
                        </div>

                        <div class="form-group">
                            <input placeholder="Empresa" class="form-control" type="text" name="company" id="company">
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input placeholder="Email (obligatorio)" class="form-control required" type="email" name="email" id="email">
                            <p style="position: absolute;bottom: -19px;right: 0;" class="msg-error">El formato de email no es correcto</p>
                        </div>
                        <div class="form-group">
                            <input placeholder="Teléfono" class="form-control" type="number" name="telephone" id="telephone">
                        </div>
                        <div class="form-group">
                            <input placeholder="Web" class="form-control" type="text" name="web" id="web">
                        </div>
                        <div class="form-group checks margin0">
                            <label>Áreas de consulta:</label>
                            {{--<label for="consult1"><input class="form-check-input" type="checkbox" name="consult1" id="consult1" value="1">Consultoría general</label>--}}
                            {{--<label for="consult2"><input class="form-check-input" type="checkbox" name="consult2" id="consult2" value="2">SEO</label>--}}
                            {{--<label for="consult3"><input class="form-check-input" type="checkbox" name="consult3" id="consult3" value="3">SEA</label>--}}
                            {{--<label for="consult4"><input class="form-check-input" type="checkbox" name="consult4" id="consult4" value="4">Publicidad online</label>--}}
                            {{--<label for="consult5"><input class="form-check-input" type="checkbox" name="consult5" id="consult5" value="5">Social Media Marketing</label>--}}
                            {{--<label for="consult6"><input class="form-check-input" type="checkbox" name="consult6" id="consult6" value="6">Diseño web</label>--}}
                        </div>
                        <div class="side">
                            <input type="checkbox" name="consult[]" value="1" id="consult1" class="gray-radio"/>
                            <label for="consult1" class="gray-radio-label">Consultoría general</label>
                            <input type="checkbox" name="consult[]" value="2" id="consult2" class="gray-radio"/>
                            <label for="consult2" class="gray-radio-label">SEO</label>
                            <input type="checkbox" name="consult[]" value="3" id="consult3" class="gray-radio"/>
                            <label for="consult3" class="gray-radio-label">SEA</label>
                            <input type="checkbox" name="consult[]" value="4" id="consult4" class="gray-radio"/>
                            <label for="consult4" class="gray-radio-label">Publicidad online</label>
                            <input type="checkbox" name="consult[]" value="5" id="consult5" class="gray-radio"/>
                            <label for="consult5" class="gray-radio-label">Social Media Marketing</label>
                            <input type="checkbox" name="consult[]" value="6" id="consult6" class="gray-radio"/>
                            <label for="consult6" class="gray-radio-label">Diseño web</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Cuéntanos más detalles para entender mejor tu negocio" id="consulta" name="consulta"></textarea>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="newsletter" value="newsletter" id="newsletter" class="gray-radio"/>
                                <label for="newsletter" class="gray-radio-label">Acepto suscribirme a la newsletter de esta web.</label>
                                {{--<input class="form-check-input" type="checkbox" name="newsletter" value="1">--}}
                                {{--<span class="acept-text">Acepto suscribirme a la newsletter de esta web.</span>--}}
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="privacy" value="privacy" id="privacy" class="gray-radio"/>
                                <label for="privacy" class="gray-radio-label">Acepto <a target="_blank" href="{{ route('generals') }}">la política de privacidad</a> aplicada en esta web.</label>
                                <p style="margin-top: -9px;" class="msg-error">Tienes que aceptar nuestra política de privacidad</p>
                                {{--<input class="form-check-input" type="checkbox" name="privacy" id="privacy" value="1">--}}
                                {{--<span class="acept-text">Acepto la política de privacidad aplicada en esta web.</span>--}}
                            </label>
                        </div>
                            <input class="submit btn-yellow-full" type="button" id="send" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('titles')
    <title>Mail y contacto de la Agencia de marketing online Thatzad</title>
    <meta name="description" content="">
@endsection
@section('scripts')
    <script>
        /*function validardatos(){
            return 0;
        }
         Validation form
        $('section.contact form .submit').click(function () {

            if(validardatos() == 0) {
                $("section.contact #contactform").submit();
            }else{
                alert('Revise los datos introducidos');
            }
        });*/
        $(document).ready(function(){
            $("#burger, #mobile-close").click(function(){
                $("#header").toggleClass('header_transparent');
            });
            $('#header').addClass('header_transparent');
            $('#header').css('position', 'absolute');

            $('#emailcontact').on('click', function (event) {
                event.preventDefault();
                var emailP1 = 'hola';
                var emailP2 = 'thatzad.com'
                window.location = 'mailto:' + emailP1 + '@' + emailP2;
            });

            $("#send").click(function(e){
                e.preventDefault();
                var error = 0;
                if (!$('#privacy').attr('checked')) {
                    error = 1;
                    $('#privacy').parent().find('.msg-error').fadeIn();
                    $('#privacy').parent().find('.gray-radio-label').addClass('not-correct');
                }else{
                    $('#privacy').parent().find('.msg-error').fadeOut();
                    $('#privacy').parent().find('.gray-radio-label').removeClass('not-correct');
                }
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test($('#email').val())) {
                    error = 1;
                    $('#email').parent().find('.msg-error').fadeIn();
                    $('#email').addClass('not-correct');
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#company").offset().top
                    }, 500);
                }
                else{
                    $('#email').parent().find('.msg-error').fadeOut();
                    $('#email').removeClass('not-correct');
                }
                // if ($('#name').val().length <= 1) error = 1;
                if (error === 0){
                    $.ajax({
                        type: 'post',
                        url: '{{ action('ContactController@send') }}',
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