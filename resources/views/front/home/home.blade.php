@extends('front.layouts.master')

@section('content')

<section class="home">
    <div class="top padding-head">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-col">
                    <p class="title-top">Marketing<br> por vocación</p>
                    <p class="title-top">Digitales<br> por naturaleza</p>
                </div>
                <div class="col-md-6 right-col">
                    <div class="text-box">
                        <p class="text-grand">“En Thatzad nos sentimos tremendamente orgullosos de hacer crecer tu negocio digital”</p>
                        <p>Entendiendo bien tu mercado, tu organización y las necesidades de tu proyecto. Con más de 10 años de experiencia para llegar por el canal más rentable a tu cliente objetivo</p>
                        <p>Desarrollamos la estrategia, la web y las campañas de publicidad con un equipo creativo, implicado y 100% efectivo.</p>
                    </div>
                    <div class="white-box">
                        Somos tu agencia boutique de marketing online
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infographics">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-info">
                    <h2>Proyectos integrales de marketing online</h2>
                </div>
                <div class="col-md-8">
                    @include('front.home.complements.infografia')
                    <!-- <object type="image/svg+xml" data="picture.svg">
                      <img
                        src="{{ asset('front/img/specials/infografía_180308-08.svg') }}">
                    </object> -->
                    <!-- <img src="{{ asset('front/img/specials/infografía_180308-08.svg') }}"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="specializations">
        <div class="container">
            <div class="row">
                <h2 class="title-home">Especializaciones</h2>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization1') }}">
                        <div class="inner-special first-special">
                            <div class="line-yellow"></div>
                            <p>Proyectos de e-commerce</p>
                            <div class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                    
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization2') }}">
                        <div class="inner-special second-special">
                            <div class="line-yellow"></div>
                            <p>Campañas orientadas a resultados</p>
                            <div class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                    
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization3') }}">
                        <div class="inner-special third-special">
                            <div class="line-yellow"></div>
                            <p>E-marketing y publicidad para marcas</p>
                            <div class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-special">
                    <a href="{{ route('specialization4') }}">
                        <div class="inner-special fourth-special">
                            <div class="line-yellow"></div>
                            <p>Transformación digital para empresas</p>
                            <div class="btn-yellow">Cómo hacer crecer tu negocio</div>
                            <div class="line-yellow line-bottom"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="whitepapers">
        <div class="container">
            <div class="row">
                <h2 class="title-home">White papers</h2>
                <div class="btn-blue"><a href="{{ route('whitepapers') }}">Ver todos los White papers ></a></div>
                <div class="whitepaper col-md-offset-1">
                    <div class="col-md-7 left-col-whitepaper">
                        <p class="title-whitepaper">Título del white paper</p>
                        <p class="text">Hear directly from the people who know it best. From teh to politics to creativity and more -whatever your interest, we’ve got you covered.</p>
                        <div class="btn-yellow-full"><a href="">Leer más</a></div>
                    </div>
                    <div class="col-md-5 right-col-whitepaper">
                        <img src="{{ asset('front/img/home/objeto-inteligente-vectorial.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-home">Artículos</h2>
                    <div class="btn-blue"><a href="">Ver todos los White papers ></a></div>    
                </div>
            </div>
            <div class="col-md-4 col-article">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-article">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-article">
                <img src="{{ asset('front/img/home/rect-ngulo-10-copia-2.png') }}">
                <div class="article-block">
                    <p class="title-article">Con chuches, la depresión postvacacional es mucho menor.</p>
                    <p class="article-text">Extracto de texto del artículo extracto de texto del artículo extracto de texto del artículo</p>
                    <div class="more"><a href="">Leer más <span>></span></a></div>
                </div>
            </div>
               
             
        </div>
    </div>
</section>

@stop

@section('scripts')
<script>
    $(document).ready(function () {
        
    });
</script>
@endsection

@section('titles')
    <title>Thatzad</title>
    <meta name="description" content="">
@endsection
