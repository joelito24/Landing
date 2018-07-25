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
                    <div class="red-social">
                        <p>
                            <span>Síguenos en redes sociales:</span>
                            <span>
								<a target="_blank" href="https://twitter.com/thatzad"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><style>.cls-1{fill:#023c4e;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M100,0A100,100,0,1,0,200,100,100.11,100.11,0,0,0,100,0Zm44.61,77.11c0,1,.07,2,.07,3,0,30.42-23.15,65.48-65.49,65.48a65.1,65.1,0,0,1-35.28-10.33A46.48,46.48,0,0,0,78,125.71a23,23,0,0,1-21.5-16,23.11,23.11,0,0,0,10.39-.39A23,23,0,0,1,48.41,86.77c0-.1,0-.2,0-.29a22.92,22.92,0,0,0,10.42,2.88,23.05,23.05,0,0,1-7.12-30.73A65.35,65.35,0,0,0,99.15,82.68a23,23,0,0,1,39.22-21A45.94,45.94,0,0,0,153,56.1a23.12,23.12,0,0,1-10.13,12.74,45.76,45.76,0,0,0,13.22-3.62A46.3,46.3,0,0,1,144.61,77.11Z"/></g></g></svg></a>
							</span>
                            <span>
								<a target="_blank" href="https://www.linkedin.com/company/thatzad.-that%27s-advertising-/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><style>.cls-1{fill:#023c4e;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><polygon class="cls-1" points="110.69 87.88 110.69 87.7 110.52 87.88 110.69 87.88"/><path class="cls-1" d="M100,0A100,100,0,1,0,200,100,100,100,0,0,0,100,0ZM73.62,149.2H49.73V77.36H73.62ZM61.68,67.74H61.5c-8,0-13.19-5.53-13.19-12.48,0-7.13,5.35-12.48,13.55-12.48,8,0,13.19,5.35,13.37,12.48C75.22,62.21,70.05,67.74,61.68,67.74Zm98,81.46H135.83V110.87c0-9.63-3.39-16.22-12.12-16.22-6.6,0-10.52,4.46-12.3,8.73-.71,1.6-.71,3.74-.71,5.88v40.11H86.81s.36-65.06,0-71.84H110.7V87.7c3.21-4.81,8.91-11.94,21.57-11.94,15.69,0,27.45,10.16,27.45,32.26Z"/></g></g></svg></a>
							</span></p>
                    </div>
                </div>
                <div class="img-col" data-animated="fadeInRight">
                    <img src="{{ asset('front/img/agency/agency.jpg') }}" alt="">
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
                                <p>Thatzad ha sido clave para desarrollar y planificar la estrategia digital de una forma innovadora en un sector muy conservador como el futbol amateur.</p>
                            </div>
                            <p class="name-opinion">Jordi Canals, <br>Digital Manager FCF.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animated="fadeInUp">
                        <div class="block-opinion">
                            <img src="{{ asset('front/img/agency/ico-opinion.png') }}" alt="">
                            <div class="text-opinion">
                                <p>Transformar un servicio tradicional como las administraciones de Lotería para llevarlo al entorno digital, solo se puede hacer de la mano de un partner que haga el proyecto suyo y pueda negociar de primera mano con los grandes players como GOOGLE o FACEBOOK.</p>
                            </div>
                            <p class="name-opinion">Sergio Milan, <br>CEO Los Loteros.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animated="fadeInUp">
                        <div class="block-opinion">
                            <img src="{{ asset('front/img/agency/ico-opinion.png') }}" alt="">
                            <div class="text-opinion">
                                <p>El equipo de Thatzad lleva años trabajando codo con codo con Vogel’s. Por su implicación, seriedad, flexibilidad y resultados son ya una parte clave de nuestro equipo de marketing</p>
                            </div>
                            <p class="name-opinion">Noemí Belenguer, <br>CEO Vogel’s Iberica.</p>
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