@extends('front.layouts.master')
@section('content')
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-contact">Contacto</h2>
                <div class="text-contact">Nos encanta hablar de marketing online, campañas, e-commerce y proyectos digitales. No te cortes. Por favor, explícanos tu negocio y pensaremos juntos la mejor forma de hacer que sea un éxito.</div>
            </div>
            <div class="col-md-6">
                <div class="form-block">
                    <form method="POST" action="{{ action('ContactController@send') }}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control required" type="text" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label>Empresa</label>
                            <input class="form-control" type="text" name="company" id="company">
                        </div>
                        <div class="form-group">
                            <label>Email (obligatorio)</label>
                            <input class="form-control required" type="text" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input class="form-control" type="text" name="telephone" id="telephone">
                        </div>
                        <div class="form-group">
                            <label>Web</label>
                            <input class="form-control" type="text" name="web" id="web">
                        </div>
                        <div class="form-group checks">
                            <label>Áreas de consulta:</label>
                            {{--<label for="consult1"><input class="form-check-input" type="checkbox" name="consult1" id="consult1" value="1">Consultoría general</label>--}}
                            {{--<label for="consult2"><input class="form-check-input" type="checkbox" name="consult2" id="consult2" value="2">SEO</label>--}}
                            {{--<label for="consult3"><input class="form-check-input" type="checkbox" name="consult3" id="consult3" value="3">SEA</label>--}}
                            {{--<label for="consult4"><input class="form-check-input" type="checkbox" name="consult4" id="consult4" value="4">Publicidad online</label>--}}
                            {{--<label for="consult5"><input class="form-check-input" type="checkbox" name="consult5" id="consult5" value="5">Social Media Marketing</label>--}}
                            {{--<label for="consult6"><input class="form-check-input" type="checkbox" name="consult6" id="consult6" value="6">Diseño web</label>--}}
                        </div>
                        <div class="side">
                            <input type="checkbox" name="consult1" value="1" id="consult1" class="gray-radio"/>
                            <label for="consult1" class="gray-radio-label">Consultoría general</label>
                            <input type="checkbox" name="consult2" value="2" id="consult2" class="gray-radio"/>
                            <label for="consult2" class="gray-radio-label">SEO</label>
                            <input type="checkbox" name="consult3" value="3" id="consult3" class="gray-radio"/>
                            <label for="consult3" class="gray-radio-label">SEA</label>
                            <input type="checkbox" name="consult4" value="4" id="consult4" class="gray-radio"/>
                            <label for="consult4" class="gray-radio-label">Publicidad online</label>
                            <input type="checkbox" name="consult5" value="5" id="consult5" class="gray-radio"/>
                            <label for="consult5" class="gray-radio-label">Social Media Marketing</label>
                            <input type="checkbox" name="consult6" value="6" id="consult6" class="gray-radio"/>
                            <label for="consult6" class="gray-radio-label">Diseño web</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Cuéntanos más detalles para entender mejor tu negocio" id="consulta" name="consulta"></textarea>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="newsletter" value="1">
                                <span class="acept-text">Acepto la política de privacidad aplicada en esta web.</span>
                            </label>
                        </div>

                        @if(isset($send) && $send == true)
                            <div class="send"><p>Se ha enviado su mensaje correctamente</p></div>
                        @else
                            <div class="send"><input class="submit btn-yellow-full" type="button" value="Enviar"></div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('scripts')
    <script>
        // Validation form
        $('section.contact form .submit').click(function () {
            if(validadardatos() == 0) {
                $("section.contact #contactform").submit();
            }else{
                alert('Revise los datos introducidos');
            }
        });
    </script>
@endsection