@extends('front.layouts.master')

@section('content')

    <section class="specializations advertising">
        <div class="ecommerce-top">
            <div class="container">
                <p class="name-page">ESPECIALIZACIONES</p>
                <h2 class="title-page">Publicidad online orientada a resultados</h2>
                <p class="subtitle">Definamos junto el buyer persona, los objetivos a conseguir y los recursos que tenemos. En THATZAD diseñaremos la mejor estrategia para conseguir los resultados que buscas.</p>
            </div>

        </div>
        <div class=" main-content">
            <div class="container">
                <div class="white-block-text">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Existen dos tipos de campañas, las que buscan notoriedad de marca (Branding) y las que persiguen objetivos finales de negocio (Performace). Está claro que siempre se persigue aumentar nuestra facturación y nuestro beneficio, pero cuando nuestra marca no es conocida y tenemos unos valores que comunicar, puede ser importante empezar con campañas de branding, para luego conseguir la conversión  mediante campañas más orientadas al objetivo.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Los objetivos no tienen que ser únicamente ventas, pueden ser leads, contactos comerciales, descargas de catálogos, visualizaciones de videos o visitar más de X minutos una web. Si definimos bien los objetivos de negocio y el embudo de conversión en THATZAD realizaremos la campaña perfecta para conseguirlos, y no por tener una barita mágica, sino con experiencia, creatividad, implicación, análisis y optimización de las campañas.</p>
                            <div class="text-big">Tú</div>
                            <div class="text-action">marcas los objetivos a conseguir</div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;padding-bottom: 70px;">
                    <div class="steps">
                        <div class="first-line">
                            <div class="step">
                                <div class="number">1 <img src="{{ asset('front/img/specials/triangulo.png') }}" alt=""></div>
                                <p class="text">Definir los objetivos de negocio dentro de la web</p>
                            </div>
                            <div  class="step">
                                <div  class="number">2 <img src="{{ asset('front/img/specials/triangulo.png') }}" alt=""></div>
                                <p class="text">Identificar cómo medirlos y cuáles son sus flujos</p>
                            </div>
                            <div  class="step">
                                <div  class="number">3 <img src="{{ asset('front/img/specials/triangulo.png') }}" alt=""></div>
                                <p class="text">Diseñar las landing pages</p>
                            </div>
                            <div  class="step">
                                <div  class="number">4 <img src="{{ asset('front/img/specials/triangulo.png') }}" alt=""></div>
                                <p class="text">Desarrollar la idea creativa</p>
                            </div>
                            <div  class="step">
                                <div  class="number">5 <img src="{{ asset('front/img/specials/triangulo.png') }}" alt=""></div>
                                <p class="text">Definir el plan de medios</p>
                            </div>
                            <div class="white-line"> </div>
                        </div>
                        <div class="between-steps">

                        </div>
                        <div class="second-line">
                            <div class="step">
                                <div class="number">6</div>
                                <p class="text">Lanzar todos los formatos</p>
                            </div>
                            <div class="step">
                                <div class="number">7</div>
                                <p class="text">Medir, medir, medir y volver a medir</p>
                            </div>
                            <div class="step">
                                <div class="number">8</div>
                                <p class="text">Analizar qué canales y formatos tienen mejor resultado</p>
                            </div>
                            <div class="step">
                                <div class="number">9</div>
                                <p class="text">Desarrollar nuevas estrategias para ir optimizando las campañas</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('front.specializations.complements.action', ['title' => 'Hagamos juntos la primera campaña y descubre hasta donde podemos llegar con tu marca.', 'btntitle' => '¿Te apuntas?'])
    </section>

@stop

@section('titles')
    <title>Publicidad online orientada a resultados | Thatzad</title>
    <meta name="description" content="">
@endsection
