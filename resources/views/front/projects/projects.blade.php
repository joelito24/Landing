@extends('front.layouts.master')

@section('content')

    <section class="projects">
        <div class="container">
            {{--<p class="name-page">Proyectos destacados</p>--}}
            <h1 class="title-page">Proyectos destacados</h1>
            <p class="subtitle-projects">Filtra las campañas y proyectos de marketing online por sectores:</p>
            <div class="block-inputs">
                @foreach($categories as $category)
                    <div class="check-category">
                        <input type="radio" name="filter" value="{{ $category->id }}" id="{{ $category->id }}" class="gray-radio"/>
                        <label for="{{ $category->id }}" class="blue">{{ $category->name }}</label>
                    </div>
                @endforeach
                {{--<div class="check-category">--}}
                    {{--<input type="checkbox" name="newsletter" value="newsletter" id="newsletter" class="gray-radio"/>--}}
                    {{--<label for="newsletter" class="gray-radio-label blue">BANCA</label>--}}
                {{--</div>--}}
            </div>
            <div class="row grid">
                @foreach($projects as $project)
                    <div data-url="{{ route('project', $project->slug) }}" data-category-id="{{ $project->category_id }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project project-{{ $project->category_id }}" data-animated="fadeInUp">
                        <figure class="effect-sarah">
                            <img src="{{$project->image1}}" alt="">
                            <div class="title-project">{{ $project->title }}
                                <div class="category">{{ $project->nameCategory }}</div>
                            </div>
                            <figcaption>
                                <p>{!! $project->description_short !!}</p>
                                <div class="btn-yellow"><a href="{{ route('project', $project->slug) }}">Ver más</a></div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project" data-animated="fadeInUp">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('files/projects/foto1_image1.png') }}" alt="">--}}
                        {{--<div class="title-project">Turisimo de Canarias--}}
                            {{--<div class="category">Turismo</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project" data-animated="fadeInUp">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('files/projects/foto1_image1.png') }}" alt="">--}}
                        {{--<div class="title-project">Bonder & Co--}}
                            {{--<div class="category">Banca</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto1.png') }}" alt="">--}}
                        {{--<div class="title-project">Turisimo de Canarias--}}
                            {{--<div class="category">Turismo</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto2.png') }}" alt="">--}}
                        {{--<div class="title-project">Bonder & Co--}}
                            {{--<div class="category">Banca</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
            </div>

        </div>
        <div class="contact-block">
            <div class="row" style="margin: 0">
                <div class="col-md-12">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <p class="big-title">Explícanos tu proyecto y objetivos y diseñaremos juntos una estrategia 100% efectiva</p>
                    </div>
                <!--<div class="btn-yellow-full"><a href="{{ route('contact') }}">Contáctanos</a></div>-->
                    <div class="col-md-3">
                        <div class="form-block">
                            <form method="POST" action="" id="contactform">
                                <div class="send" id="response"></div>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <!--<label>Nombre</label>-->
                                    <input class="form-control required" type="text" name="name" id="name" placeholder="Nombre">
                                </div>
                                {{--Campo oculto, no es para usuarios normales--}}
                                <div class="lastname">
                                    <input class="form-control" placeholder="Apellido" type="text" name="lastname" id="lastname">
                                </div>
                                <div class="form-group">
                                    <!--<label>Email (obligatorio)</label>-->
                                    <input class="form-control required" type="text" name="email" id="email" placeholder="Email (obligatorio)">
                                    <p style="margin-top:0px; margin-bottom: -13px;" class="msg-error">El formato de email no es correcto</p>
                                </div>
                                <div class="form-group">
                                    <!--<label>Comentario</label>-->
                                    <textarea class="form-control" placeholder="Cuéntanos más detalles para entender mejor tu negocio" id="consulta" name="consulta"></textarea>
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
                </div>
            </div>

        </div>
    </section>

@stop

@section('titles')
    <title>Proyectos marketing online | Thatzad</title>
    <meta name="description" content="Ideas, proyectos, campañas y casos de éxito de THATZAD, tu agencia de marketing online e eCommerce. That's Advertising!">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#proyectos").addClass('main-blue');

            if($(window).width() >= 992){
                $('.effect-sarah').click(function(){
                    var $url = $(this).parent().attr('data-url');
                    window.location.href = $url;
                });
            }



            //Script para mostrar proyectos por categoría
            $('.check-category input').change(function() {
                var sList = "";
                var val = 0;
                $('.project').hide();
                $('.check-category label').removeClass('active');
                $(this).parent().find('label').addClass('active');
                $('input[type=radio]').each(function () {
                    var sThisVal = (this.checked ? "1" : "0");
                    if(sThisVal == 1){
                        val = $(this).val();
                        $(".project-"+ val).fadeIn();
                    }else{
                        val = 0;
                    }
                    sList += (sList=="" ? val : "" + val);
                });
                var nList = parseInt(sList);
                if(nList == 0){
                    $('.project').show();
                }
                // console.log (parseInt(sList));
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
                //if ($('#name').val().length <= 1)error = 1;
                if (error === 0){
                    $.ajax({
                        type: 'post',
                        url: '{{ action('ContactController@sendShort') }}',
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
