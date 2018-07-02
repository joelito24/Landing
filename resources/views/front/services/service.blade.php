@extends('front.layouts.master')

@section('content')

    <section class="service">
    	<div class="container" style="    BACKGROUND: transparent;
    position: absolute;
    z-index: 10000;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;top: 10px;">
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
	    			<div class="col-sm-12 top-page">
	        			{!! $service->about !!}
	    			</div>
	    			<div class="col-md-6 text-page">
	    				<div class="description1">{!! $service->description1 !!}</div>
	        			<div class="quote">"{!! $service->quote !!}"</div>
	        			<div class="description2">{!! $service->description2 !!}</div>
	    			</div>
	    			<div class="col-md-6">
	    				<img src="{{ $service->image1 }}">
	    			</div>
	    			
	    		</div>
	    	</div>
    	</div>
    	
    	<div class="conclusion-service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6">
    					<div class="conclusion">{!! $service->conclusion !!}</div>
    				</div>
    				<div class="col-md-6">
    					<img src="{{ $service->image2 }}">
    				</div>
    			</div>
    		</div>
		</div>
		<div class="contact-block">
			<div class="container">
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<p class="big-title">Explícanos tu proyecto y objetivos y diseñaremos juntos una estrategia 100% efectiva</p>
						<!--<div class="btn-yellow-full"><a href="{{ route('contact') }}">Contáctanos</a></div>-->
						<div class="col-md-6">
							<div class="form-block">
								<form method="POST" action="{{ action('ContactController@send') }}" id="contactform">
									<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
									<div class="form-group">
										<label>Nombre</label>
										<input class="form-control required" type="text" name="name" id="name">
									</div>
									<div class="form-group">
										<label>Email (obligatorio)</label>
										<input class="form-control required" type="text" name="email" id="email">
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Cuéntanos más detalles para entender mejor tu negocio" id="consulta" name="consulta"></textarea>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" name="newsletter" value="1">
											<span class="acept-text">Acepto suscribirme a la newsletter de esta web.</span>
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" name="privacy" id="privacy" value="1">
											<span class="acept-text">Acepto la política de privacidad aplicada en esta web.</span>
										</label>
									</div>
									<div class="send" id="response"><input class="submit btn-yellow-full" type="button" id="send" value="Enviar"></div>
								</form>
							</div>
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
                if (!$('#privacy').attr('checked'))error = 1;
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test($('#email').val()))error = 1;
                if ($('#name').val().length <= 1)error = 1;
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