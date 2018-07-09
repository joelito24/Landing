@extends('front.layouts.master')

@section('content')

    <section class="projects">
        <div class="container">
            <p class="name-page">Proyectos destacados</p>
            <h2 class="title-page">Proyectos destacados</h2>
            <p class="subtitle-projects">Puedes filtrar los proyectos por sectores:</p>
            <div class="block-inputs">
                @foreach($categories as $category)
                <div class="check-category">
                    <input type="checkbox" name="{{ $category->id }}" value="{{ $category->name }}" id="{{ $category->name }}" class="gray-radio"/>
                    <label for="{{ $category->name }}" class="gray-radio-label blue">{{ $category->name }}</label>
                </div>
                @endforeach
                {{--<div class="check-category">--}}
                    {{--<input type="checkbox" name="newsletter" value="newsletter" id="newsletter" class="gray-radio"/>--}}
                    {{--<label for="newsletter" class="gray-radio-label blue">BANCA</label>--}}
                {{--</div>--}}
            </div>
            <div class="row grid">
                @foreach($projects as $project)
                    <div class="col-md-4">
                        <figure class="effect-sarah">
                            <img src="{{ asset('front/img/foto1.png') }}" alt="">
                            <div class="title-project">{{ $project->title }}
                                <div class="category">{{ $project->nameCategory }}</div>
                            </div>
                            <figcaption>
                                <p>{{ $project->description }}</p>
                                <div class="btn-yellow"><a href="{{ route('project', $project->slug) }}">Ver mas</a></div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                {{--<div class="col-md-4">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto1.png') }}" alt="">--}}
                        {{--<div class="title-project">Turisimo de Canarias--}}
                            {{--<div class="category">Turismo</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto2.png') }}" alt="">--}}
                        {{--<div class="title-project">Bonder & Co--}}
                            {{--<div class="category">Banca</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto1.png') }}" alt="">--}}
                        {{--<div class="title-project">Turisimo de Canarias--}}
                            {{--<div class="category">Turismo</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('front/img/foto2.png') }}" alt="">--}}
                        {{--<div class="title-project">Bonder & Co--}}
                            {{--<div class="category">Banca</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
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
