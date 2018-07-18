@extends('front.layouts.master')

@section('content')

    <section class="agency">
        <div class="top-agency">
            <div class="container">
                <p class="name-page">La agencia</p>
                <h1 class="title">Una agencia boutique de grandes proyectos</h1>
                <h2 class="subtitle" data-animated="fadeInUp">Marketing por vocación. Digitales por naturaleza.</h2>
            </div>
        </div>
        <div class="content-agency" data-animated="fadeInUp">
            <div class="container">
                <div class="description">
                    <div class="col-md-6">
                        <p class="text-desc">El éxito de un negocio digital es una mezcla de <span>Conocimiento, Creatividad y Esfuerzo</span>. Pero el Conocimiento se multiplica cuando se trabaja en equipo, la Creatividad se amplifica cuando todos aportan ideas y el <span>Esfuerzo</span> se disfruta cuando te mueve la pasión y las ganas de ir un paso más allá y hacer las cosas mucho mejor.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="phrase">Nos sentimos tremendamente orgullosos de idear, lanzar y hacer crecer negocios digitales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-agency">
            <div class="inner-agency">
                <div class="text-col" data-animated="fadeInLeft">
                    <p>Pero para hacerlo realmente bien, no podemos tener cien clientes, no sabemos hacer webs, e-shops o campañas online como si fueran una cadena de montaje. No nos obsesiona optimizar los tiempos de producción, maximizar la rentabilidad o conseguir volumen para bajar costes. Sólo nos concentramos en que los proyectos superen las expectativas de nuestros Clientes.</p>
                    <p>Esa es nuestra idea de Agencia Boutique, grandes proyectos por su calidad, no por su tamaño. Proyectos motivantes, que ilusionen al equipo, ya que son ellos los que deberán ir un paso más allá con su creatividad, ejecutando las campañas, analizando los resultados y dándole una vuelta y otra más para dar con las claves que consigan los objetivos marcados.</p>
                    <p>Esta ha sido nuestra forma de entender lo que queríamos que fuera nuestra agencia de marketing online durante los últimos 12 años, nosotros estamos orgullosos de haberlo conseguido y nos gusta pensar que nuestros Clientes opinan lo mismo.</p>
                </div>
                <div class="img-col" data-animated="fadeInRight">
                    <img src="{{ asset('front/img/agency/agency.png') }}" alt="">
                </div>
            </div>

        </div>
        <div class="white-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title-opinion">Lo que dicen de nosotros</p>
                    </div>
                    <div class="col-md-4" data-animated="fadeInUp">
                        <div class="block-opinion">
                            <img src="{{ asset('front/img/agency/ico-opinion.png') }}" alt="">
                            <div class="text-opinion">
                                <p>Marty, you didn't fall asleep, did you? No, it was The Enchantment Under The Sea Dance. Our first date. It was the night of that terrible thunderstorm, remember George? Your father kissed me for the very first time on that dance floor. It was then I realized I was going to spend the rest of my life with him.</p>
                            </div>
                            <p class="name-opinion">Nombre Apellido y empresa</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animated="fadeInUp">
                        <div class="block-opinion">
                            <img src="{{ asset('front/img/agency/ico-opinion.png') }}" alt="">
                            <div class="text-opinion">
                                <p>Marty, you didn't fall asleep, did you? No, it was The Enchantment Under The Sea Dance. Our first date. It was the night of that terrible thunderstorm, remember George? Your father kissed me for the very first time on that dance floor. It was then I realized I was going to spend the rest of my life with him.</p>
                            </div>
                            <p class="name-opinion">Nombre Apellido y empresa</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animated="fadeInUp">
                        <div class="block-opinion">
                            <img src="{{ asset('front/img/agency/ico-opinion.png') }}" alt="">
                            <div class="text-opinion">
                                <p>Marty, you didn't fall asleep, did you? No, it was The Enchantment Under The Sea Dance. Our first date. It was the night of that terrible thunderstorm, remember George? Your father kissed me for the very first time on that dance floor. It was then I realized I was going to spend the rest of my life with him.</p>
                            </div>
                            <p class="name-opinion">Nombre Apellido y empresa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-action">
            <div class="container">
                <div class="col-md-10">
                    <p class="action-title" data-animated="fadeInUp">Desarrollamos la estrategia, la web y las campañas de publicidad con un equipo creativo, implicado y 100% efectivo. </p>
                    <p class="action-title" data-animated="fadeInUp">Somos tu agencia boutique de marketing online.</p>
                    <div class="btn-yellow-full"><a href="{{ route('contact') }}">¿Quieres descubrirlo?</a></div>
                </div>
            </div>
        </div>
        <div class="content-agency vision">
            <div class="inner-agency">
                <div class="text-col" data-animated="fadeInLeft">
                    <p class="title-opinion">Visión</p>
                    <p>Queremos ser la agencia de marketing online de la que nuestros clientes estén absolutamente convencidos de que deben confiar sus proyectos clave.</p>
                    <p>Por efectividad y resultados en los parámetros que realmente influyen en el negocio, por visión estratégica y la capacidad de ir un paso más allá, prever su necesidades en un mercado cambiante que conocemos y en el que tenemos toda la experiencia. Con un enfoque creativo y en inspiradas ocasiones genial.</p>
                    <p class="title-yellow">Puro músculo. Cero grasa</p>
                </div>
                <div class="img-col" data-animated="fadeInRight">
                    <img src="{{ asset('front/img/agency/agency2.jpg') }}" alt="">
                </div>
            </div>
            <div class="white-space">

            </div>
        </div>
        <div class="valores">
            <div class="container">
                <p class="title-valor">Valores de Thatzad</p>
                <div class="intro" data-animated="fadeInUp">
                    <p>Valores que intentamos transmitir cada día en Thatzad.</p>
                    <p>Nos consideramos…</p>
                </div>

                <ul >
                    <li data-animated="fadeInUp">Éticos.</li>
                    <li data-animated="fadeInUp">Honestos.</li>
                    <li data-animated="fadeInUp">Empáticos.</li>
                    <li data-animated="fadeInUp">Implicados. </li>
                    <li data-animated="fadeInUp">Efectivos.</li>
                    <li data-animated="fadeInUp">Visionarios.</li>
                    <li data-animated="fadeInUp">Personas.</li>
                </ul>
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
        $(document).ready(function(){
            $('#header').css('opacity', '0.9');
            $('#header').css('position', 'absolute');
            $("#agencia").addClass('main-blue');
        });
    </script>
@endsection