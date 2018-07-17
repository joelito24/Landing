@extends('front.layouts.master')

@section('content')
    <div class="container">

        <p class="name-page">Proyectos destacados</p>
    </div>
    <section class="project">

        <div class="project-top" style="background-image: url({{$project->image1}});">
            <div class="container">
                <h1 class="title">{{ $project->title }}</h1>
                <p class="category-name">{{ $project->nameCategory }}</p>
            </div>
        </div>
        <div class="project-description" data-animated="fadeInUp">
            {!! $project->description  !!}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="question">¿Qué hemos hecho juntos?</p>
                </div>
                <div class="col-md-6">
                    <div class="main-description" data-animated="fadeInLeft">
                        {!! $project->description_big !!}
                    </div>
                </div>
                <div class="col-md-6 block-img" data-animated="fadeInRight">
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
        @if($project->getProjectRelated())
        <div class="related">
            <div class="container">
                <p class="title-related">Proyectos relacionados</p>
                <div class="grid" style="@if(count($project->getProjectRelated()) < 4) display: flex;justify-content: center; @endif">

                        @foreach($project->getProjectRelated() as $related)
                            <div data-category-id="{{ $related->id }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project" data-animated="fadeInUp">
                                <figure class="effect-sarah">
                                    <img src="{{$related->image1}}" alt="">
                                    <div class="title-project">{{ $related->title }}
                                        <div class="category">{{ $related->nameCategory }}</div>
                                    </div>
                                    <figcaption>
                                        <p>{!! $related->description_short !!}</p>
                                        <div class="btn-yellow"><a href="{{ route('project', $related->slug) }}">Ver mas</a></div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        @endif
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
            $("#proyectos").addClass('main-blue');
        });
    </script>
@endsection