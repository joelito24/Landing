@extends('front.layouts.master')

@section('content')

    <section class="service">
        <div class="container">
            <h2 class="title-page">Proyectos destacados</h2>
            <p>Puedes filtrar los proyectos por sectores:</p>
            <input type="checkbox" name="category" value="category" class="gray-radio"/>
            <label for="category" class="gray-radio-label">TURISMO</label>
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
