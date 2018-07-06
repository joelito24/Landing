@extends('front.layouts.master')

@section('content')

    <section class="agency">
        <div class="top-agency">
            <div class="container">
                <p class="name-page">Agencia</p>
                <h1 class="title">Una agencia boutique de grandes proyectos</h1>
                <h2 class="subtitle">Marketing por vocación. Digitales por naturaleza.</h2>
            </div>
        </div>
        <div class="content-agency">
            <div class="container">
                <div class="description">
                    <div class="col-md-6">
                        <p class="text-desc">El éxito de un negocio digital es una mezcla de Conocimiento, Creatividad y Esfuerzo. Pero el Conocimiento se multiplica cuando se trabaja en equipo, la Creatividad se amplifica cuando todos aportan ideas y el Esfuerzo se disfruta cuando te mueve la pasión y las ganas de ir un paso más allá y hacer las cosas mucho mejor.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="phrase">Nos sentimos tremendamente orgullosos de idear, lanzar y hacer crecer negocios digitales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-agency">
            <div class="inner-agency">
                <div class="text-col">
                    <p>Pero para hacerlo realmente bien, no podemos tener cien clientes, no sabemos hacer webs, e-shops o campañas online como si fueran una cadena de montaje. No nos obsesiona optimizar los tiempos de producción, maximizar la rentabilidad o conseguir volumen para bajar costes. Sólo nos concentramos en que los proyectos superen las expectativas de nuestros Clientes.</p>
                    <p>Esa es nuestra idea de Agencia Boutique, grandes proyectos por su calidad, no por su tamaño. Proyectos motivantes, que ilusionen al equipo, ya que son ellos los que deberán ir un paso más allá con su creatividad, ejecutando las campañas, analizando los resultados y dándole una vuelta y otra más para dar con las claves que consigan los objetivos marcados.</p>
                    <p>Esta ha sido nuestra forma de entender lo que queríamos que fuera nuestra agencia de marketing online durante los últimos 12 años, nosotros estamos orgullosos de haberlo conseguido y nos gusta pensar que nuestros Clientes opinan lo mismo.</p>
                </div>
                <div class="img-col">
                    <img src="{{ asset('front/img/agency/agency.png') }}" alt="">
                </div>
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
            $('#header').addClass('header_transparent');
            $('#header').css('position', 'absolute');
            $("#agencia").addClass('main-blue');
        });
    </script>
@endsection