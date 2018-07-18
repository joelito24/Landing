<header id="header">
    <div class="container">
        <div class="col-md-4">
            <a href="{{ route('home') }}" ><img class="img-logo" src="{{ asset('front/img/header/logotipo.png') }}"></a>
        </div>
        <div id="button-mobile">
                <a href="#" id="burger"><img src="{{ asset('front/img/header/b-burger.png') }}"></a>
                <a href="#" id="mobile-close" style="display: none"><img src="{{ asset('front/img/header/ios7-close-empty.png') }}"></a>

        </div>
        <div class="col-12" id="mobile-menu-content">
            <div class="row">
                <ul class="menu">
                    <li class="mbl-especializaciones default-color">Especializaciones <img src="{{ asset('front/img/header/flecha.png') }}"></li>
                    <ul class="esp-mobile-dropdown">
                        <li><a href="{{ route('specialization1') }}">Proyectos de e-commerce</a></li>
                        <li><a href="{{ route('specialization2') }}">Publicidad online orientada a resultados</a></li>
                        <li><a href="{{ route('specialization3') }}">e-Marketing y publicidad para marcas</a></li>
                        <li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
                    </ul>
                    <li class="mbl-servicios default-color">Servicios <img src="{{ asset('front/img/header/flecha.png') }}"></li>
                    <ul class="mobile-dropdown">
                        @foreach($services as $service)
                            <li><a href="{{ route('service',$service->slug) }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                    <li><a href="{{ route('projects') }}">Proyectos</a></li>
                    <li><a href="{{ route('agency') }}">La Agencia</a></li>
                </ul>
                <ul class="menu main-blue">
                    <li><a href="{{ route('whitepapers') }}">White papers</a></li>
                    <li><a href="http://www.thatzblog.com/" target="_blank">Blog</a></li>
                    <li><a href="{{ route('contact') }}"><img src="{{ asset('front/img/header/sobre-icon.png') }}"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8" id="menu-content">

                <div class="row">
                    <ul class="menu little">
                        <li class="main-blue"><a href="{{ route('whitepapers') }}">White papers</a></li>
                        <li class="main-blue"><a href="http://www.thatzblog.com/" target="_blank">Blog</a></li>
                        <li><a href="{{ route('contact') }}"><img id="sobre" src="{{ asset('front/img/header/sobre-icon.png') }}"></a></li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="menu">
                        <li class="especializaciones" id="especializaciones">Especializaciones
                            <ul class="dropdown">
                                <li><a href="{{ route('specialization1') }}">Proyectos de e-commerce</a></li>
                                <li><a href="{{ route('specialization2') }}">Publicidad online orientada a resultados</a></li>
                                <li><a href="{{ route('specialization3') }}">e-Marketing y publicidad para marcas</a></li>
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
                        <li><a href="{{ route('agency') }}" id="agencia">La Agencia</a></li>
                    </ul>
                </div>
        </div>
    </div>
</header>

