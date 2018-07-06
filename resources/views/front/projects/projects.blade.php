@extends('front.layouts.master')

@section('content')

    <section class="projects">
        <div class="container">
            <h2 class="title-page">Proyectos destacados</h2>
            <p class="subtitle-projects">Puedes filtrar los proyectos por sectores:</p>
            <div class="block-inputs">
                <div class="check-category">
                    <input type="checkbox" name="privacy" value="privacy" id="privacy" class="gray-radio"/>
                    <label for="privacy" class="gray-radio-label blue">TURISMO</label>
                </div>
                <div class="check-category">
                    <input type="checkbox" name="newsletter" value="newsletter" id="newsletter" class="gray-radio"/>
                    <label for="newsletter" class="gray-radio-label blue">BANCA</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="inner-category">
                        <img src="{{ asset('front/img/contact.png') }}" alt="">
                        <p class="title-project">Turisimo de Canarias</p>
                        <p class="title-category">TURISMO</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-category">
                        <p>Turisimo de Canarias</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-category">
                        <p>Turisimo de Canarias</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="inner-category">
                        <p>Turisimo de Canarias</p>
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
        $(document).ready(function () {
            $("#proyectos").addClass('main-blue');
        });
    </script>
@endsection
