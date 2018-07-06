@extends('front.layouts.master')

@section('content')

    <section class="service">
        Thatzad Agencia
    </section>

@stop

@section('titles')
    <title>Thatzad</title>
    <meta name="description" content="">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#agencia").addClass('main-blue');
        });
    </script>
@endsection