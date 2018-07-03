<header id="header">
    <div class="container">
        <a href="{{ route('home') }}">Logo</a>
        <div class="top-inner-menu">
            <ul class="menu">
                <li><a href="{{ route('whitepapers') }}">White papers</a></li>
                <li><a href="http://www.thatzblog.com/">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contacto</a></li>
            </ul>
        </div>
        <div class="inner-menu">
            <ul class="menu">
                <li>Especializaciones
                    <ul>
                        <li><a href="{{ route('specialization1') }}">Proyectos de e-commerce</a></li>
                        <li><a href="{{ route('specialization2') }}">Campañas orientadas a resultados</a></li>
                        <li><a href="{{ route('specialization3') }}">E-marketing y publicidad para marcas</a></li>
                        <li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
                    </ul>
                </li>
                <li>Servicios
                    <ul>
                        @foreach($services as $service)
                            <li><a href="{{ route('service',$service->slug) }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('projects') }}">Proyectos</a></li>
                <li><a href="{{ route('agency') }}">Agencia</a></li>
            </ul>
        </div>

    </div>
</header>