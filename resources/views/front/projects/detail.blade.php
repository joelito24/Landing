@extends('front.layouts.master')

@section('content')
    <div class="container">

        <p class="name-page">Proyectos destacados</p>
    </div>
    <section class="project">

        <div class="project-top" style="background: url({{$project->image1}}) no-repeat center center; background-size: cover;">
            <div class="container">
                <h1 class="title">{{ $project->title }}</h1>
                <p class="category-name">{{ $project->nameCategory }}</p>
            </div>
        </div>
        <div class="project-description">
            {!! $project->description  !!}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="question">¿Qué hemos hecho juntos?</p>
                </div>
                <div class="col-md-6">
                    <div class="main-description">
                        {!! $project->description_big !!}
                    </div>
                </div>
                <div class="col-md-6 block-img">
                    <img src="{{ asset($project->image2) }}" alt="">
                </div>
            </div>

        </div>
        <div class="block-slider">
            <div class="container">
                <div id="carroselhome" class="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carroselhome" data-slide-to="0" class="active"></li>
                        <li data-target="#carroselhome" data-slide-to="1"></li>
                        <li data-target="#carroselhome" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ $project->image3 }}">
                        </div>
                        <div class="item">
                            <img src="{{ $project->image4 }}">
                        </div>
                        <div class="item">
                            <img src="{{ $project->image5 }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="container">
                <p class="title-related">Proyectos relacionados</p>
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
            $("#header").addClass('hide-transparent');
        });
    </script>
@endsection