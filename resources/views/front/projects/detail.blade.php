@extends('front.layouts.master')

@section('content')
    <section class="project">

        <div class="project-top">
            <div class="container">
                <p class="name-page">Proyectos destacados</p>
                <h1 class="title">{{ $project->title }}</h1>
            </div>
        </div>
        <div class="container">

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
            $("#header").addClass('hide-transparent');
        });
    </script>
@endsection