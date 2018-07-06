@extends('front.layouts.master')

@section('content')

    <section class="service">
        Thatzad Proyectos
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
