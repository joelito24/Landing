@extends('front.layouts.master')

@section('content')

    <section class="service">
        Thatzad White Papers
        <div class="container">
            <div class="row" style="margin-top: 40px">
                <div class="col-md-6">
                    <div class="form-block">
                        <form method="POST" action="" id="form_newsletter">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control required" type="text" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control required" type="email" name="email" id="email" required>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="privacy" name="newsletter" value="1">
                                    <span class="acept-text">Acepto la política de privacidad aplicada en esta web.</span>
                                </label>
                            </div>
                                <div class="send" id="response"><input class="submit btn-yellow-full" type="button" id="send" value="Enviar"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop
@section('scripts')
<script>
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
                   url: 'routes.newsletter',
                   data: $('#form_newsletter').serialize(),
                   success: function(response) {
                       $('#form_newsletter').trigger("reset");
                       $('#privacy').prop('checked', false);
                       if (response === 'sent'){
                           $('#response').html('Se ha enviado su solicitud correctamente');
                       }
                       else if (response === 'exist'){
                           $('#response').html('El email indicado ya ha sido introducido');
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
@section('titles')
    <title>Thatzad</title>
    <meta name="description" content="">
@endsection

