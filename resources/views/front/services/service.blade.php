@extends('front.layouts.master')

@section('content')

    <section class="service">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="blue-word">SERVICIOS</div>
					<h2 class="title-service">{{ $service->title }}</h2>
    			</div>
				
			</div>
    	</div>
    	<div class="text-service">
    		<div class="container">
	    		<div class="row">

	    			<div class="col-sm-12 col-md-5 @if(empty(strip_tags($service->about))) text-page @else top-page @endif">
						{!! $service->about !!}
						<div class="text-page" style="@if(!empty(strip_tags($service->about))) margin-top:50px; @endif">
							<div class="description1">{!! $service->description1 !!}</div>
							<div class="quote-mbl">
								<div class="quote">"{!! $service->quote !!}"</div>
							</div>
{{--							<div class="description2">{!! $service->description2 !!}</div>--}}
						</div>
	    			</div>
					<div class="col-md-1"></div>
					<div class="col-sm-12 col-md-6">
							<div class="row quote-desk">
								<div class="quote">"{!! $service->quote !!}"</div>
							</div>
							<div class="row">
								<img class="img-responsive" src="{{ $service->image1 }}">
							</div>

						<!--<img src="{{ $service->image1 }}">-->
					</div>
				</div>




	    			
			</div>
		</div>

    	<div class="conclusion-service" style="background: url({{ $service->image2 }}) no-repeat center center">
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-12 col-md-6">
    					<div class="conclusion">{!! $service->conclusion !!}</div>
    				</div>
    				<div class="col-sm-12 col-md-6">
    					<!--<img src="{{ $service->image2 }}">-->
    				</div>
    			</div>
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
    <title>Thatzad</title>
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