@extends('front.layouts.master')

@section('content')

    <section class="specializations transformation">
        <div class="ecommerce-top">
            <div class="container">
                <p class="name-page">ESPECIALIZACIONES</p>
                <h2 class="title-page">Transformación digital para empresas </h2>
                <div class="row">
                    <div class="col-md-6" data-animated="fadeInLeft">
                        <p class="transform-title">Transformar los procesos de una compañía parte de nuevos sistemas y herramientas web que los hagan sencillos y eficientes. Descubre hasta dónde podemos llegar juntos.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-1" data-animated="fadeInRight">
                        <p>El concepto de trasformación digital de una empresa es ciertamente amplio e implica cambios culturales y organizativos profundos en las compañías.</p>
                        <p>THATZAD no es una consultoría de transformación digital, quizás no seamos los expertos que definan tu modelo de negocio en los próximos años, pero sí podemos ayudarte a diseñar y programar los sistemas y herramientas que necesitas para redefinir las operaciones de tu empresa. Somos expertos en hacer crecer la semilla tecnológica de la transformación digital de las organizaciones.</p>
                    </div>
                    <div class="col-md-12 inner-img" data-animated="fadeInUp">
                        <img class="w100" src="{{ asset('front/img/specials/info-transformation.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="white-stripers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title-page">Muchísimo más que una web</p>
                    </div>
                    <div class="col-md-6 col-text" data-animated="fadeInUp">
                        <p>En THATZAD aportamos nuestra experiencia y conocimiento de Internet a diseñar sistemas gestores desde cero, a medida de las necesidades de cada Cliente. Desde una intranet (en web o APP), un ERP personalizado que enlace con tu e-commerce, un CRM ligado a tu web y redes sociales o un gestor de reservas integral que intercambie información con APIs externas.</p>
                        <p>Apostamos por los lenguajes abiertos y no por las herramientas herméticas que hay en el mercado, para programar a medida todo lo que pueda necesitar tu empresa. HTML5, PHP4, CSS3, Ajax o Javascript nos permiten diseñar libremente, tanto a nivel gráfico como de arquitectura y enfrentarnos a reglas de negocio complejas.</p>
                        <p>El límite está únicamente en nuestra imaginación y no en la tecnología.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-5 col-benefits" data-animated="fadeInUp">
                        <ul class="list-benefits">
                            <li>Web/eCommerce/APP a medida</li>
                            <li>Intranets corporativas</li>
                            <li>Diseño y programación ERP</li>
                            <li>Desarrollo gestor de reservas</li>
                            <li>Creación e integración de APIs</li>
                            <li>Funcionalidades web complejas</li>
                            <li>Programación a medida</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('front.specializations.complements.action', ['title' => 'Hagamos webs complejas para facilitarte el trabajo', 'btntitle' => 'Hablemos'])
    </section>

@stop

@section('titles')
    <title>Transformación digital para empresas  | Thatzad</title>
    <meta name="description" content="">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#especializaciones").addClass('main-blue');
        });
    </script>
@endsection