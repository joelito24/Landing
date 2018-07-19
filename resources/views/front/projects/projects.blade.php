@extends('front.layouts.master')

@section('content')

    <section class="projects">
        <div class="container">
            {{--<p class="name-page">Proyectos destacados</p>--}}
            <h2 class="title-page">Proyectos destacados</h2>
            <p class="subtitle-projects">Puedes filtrar los proyectos por sectores:</p>
            <div class="block-inputs">
                @foreach($categories as $category)
                    <div class="check-category">
                        <input type="checkbox" name="{{ $category->id }}" value="{{ $category->id }}" id="{{ $category->id }}" class="gray-radio"/>
                        <label for="{{ $category->id }}" class="gray-radio-label blue">{{ $category->name }}</label>
                    </div>
                @endforeach
                {{--<div class="check-category">--}}
                    {{--<input type="checkbox" name="newsletter" value="newsletter" id="newsletter" class="gray-radio"/>--}}
                    {{--<label for="newsletter" class="gray-radio-label blue">BANCA</label>--}}
                {{--</div>--}}
            </div>
            <div class="row grid">
                @foreach($projects as $project)
                    <div id="" data-category-id="{{ $project->category_id }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project project-{{ $project->category_id }}" data-animated="fadeInUp">
                        <a href="{{ route('project', $project->slug) }}">
                            <figure class="effect-sarah">
                                <img src="{{$project->image1}}" alt="">
                                <div class="title-project">{{ $project->title }}
                                    <div class="category">{{ $project->nameCategory }}</div>
                                </div>
                                <figcaption>
                                    <p>{!! $project->description_short !!}</p>
                                    <div class="btn-yellow"><a href="{{ route('project', $project->slug) }}">Ver más</a></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project" data-animated="fadeInUp">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('files/projects/foto1_image1.png') }}" alt="">--}}
                        {{--<div class="title-project">Turisimo de Canarias--}}
                            {{--<div class="category">Turismo</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project" data-animated="fadeInUp">--}}
                    {{--<figure class="effect-sarah">--}}
                        {{--<img src="{{ asset('files/projects/foto1_image1.png') }}" alt="">--}}
                        {{--<div class="title-project">Bonder & Co--}}
                            {{--<div class="category">Banca</div>--}}
                        {{--</div>--}}
                        {{--<figcaption>--}}
                            {{--<p>Una de las principales empresas de alquiler de villas de lujo y servicios de concierge de España fusionada con una de las más importantes del mundo. </p>--}}
                            {{--<div class="btn-yellow"><a href="">Ver mas</a></div>--}}
                        {{--</figcaption>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project">--}}
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
                {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project">--}}
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

            //Script para mostrar proyectos por categoría
            $('.check-category input').change(function() {
                var sList = "";
                var val = 0;
                $('.project').hide();
                $('input[type=checkbox]').each(function () {
                    var sThisVal = (this.checked ? "1" : "0");
                    if(sThisVal == 1){
                        val = $(this).val();
                        $(".project-"+ val).fadeIn();
                    }else{
                        val = 0;
                    }
                    sList += (sList=="" ? val : "" + val);
                });
                var nList = parseInt(sList);
                if(nList == 0){
                    $('.project').show();
                }
                // console.log (parseInt(sList));
            });

        });
    </script>
@endsection
