<header id="header">
    <div class="container">
        <div class="col-md-6">
            <a href="{{ route('home') }}" ><img class="img-logo" src="{{ asset('front/img/header/logotipo.png') }}"></a>
        </div>
        <div id="button-mobile">
                <a href="#" id="burger"><img src="{{ asset('front/img/header/burger.png') }}"></a>
                <a href="#" id="mobile-close" style="display: none"><img src="{{ asset('front/img/header/ios7-close-empty.png') }}"></a>

        </div>
        <div class="col-12" id="mobile-menu-content">
            <div class="row">
                <ul class="menu">
                    <li class="especializaciones default-color">Especializaciones
                    </li>
                    <li class="servicios default-color">Servicios
                    </li>
                    <li><a href="{{ route('projects') }}">Proyectos</a></li>
                    <li><a href="{{ route('agency') }}">La agencia</a></li>
                </ul>
                <hr>
                <ul class="menu main-blue">
                    <li><a href="{{ route('whitepapers') }}">White papers</a></li>
                    <li><a href="http://www.thatzblog.com/">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6" id="menu-content">

                <div class="row">
                    <ul class="menu little">
                        <li class="main-blue"><a href="{{ route('whitepapers') }}">White papers</a></li>
                        <li class="main-blue"><a href="http://www.thatzblog.com/">Blog</a></li>
                        <li><a href="{{ route('contact') }}"><img id="sobre" src="{{ asset('front/img/header/sobre-icon.png') }}"></a></li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="menu">
                        <li class="especializaciones" id="especializaciones">Especializaciones
                            <ul class="dropdown">
                                <li><a href="{{ route('specialization1') }}">Proyectos de e-commerce</a></li>
                                <li><a href="{{ route('specialization2') }}">Campañas orientadas a resultados</a></li>
                                <li><a href="{{ route('specialization3') }}">E-marketing y publicidad para marcas</a></li>
                                <li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
                            </ul>
                        </li>
                        <li class="servicios" id="servicios">Servicios
                            <ul class="dropdown">
                                @foreach($services as $service)
                                    <li><a href="{{ route('service',$service->slug) }}">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('projects') }}" id="proyectos">Proyectos</a></li>
                        <li><a href="{{ route('agency') }}" id="agencia">La agencia</a></li>
                    </ul>
                </div>
        </div>
    </div>
</header>

