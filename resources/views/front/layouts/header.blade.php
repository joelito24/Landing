<header id="header">
    <div class="container">
        <div class="col-md-4">
            <a href="{{ route('home') }}" ><img class="img-logo" src="{{ asset('front/img/header/logotipo.png') }}"></a>
            <div id="button-mobile">
                <a href="#" id="burger">
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-12" id="mobile-menu-content">
            <div class="row">
                <ul class="menu">
                    <li class="mbl-especializaciones default-color">Especializaciones <span class="arrow down"></span></li>
                    <ul class="esp-mobile-dropdown">
                        <li><a href="{{ route('specialization1') }}">Proyectos de e‑Commerce</a></li>
                        <li><a href="{{ route('specialization3') }}">e‑Marketing y publicidad para marcas</a></li>
                        <li><a href="{{ route('specialization2') }}">Publicidad online orientada a resultados</a></li>
                        <li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
                    </ul>
                    <li class="mbl-servicios default-color">Servicios <span class="arrow down"></span></li>
                    <ul class="mobile-dropdown">
                        @foreach($services as $service)
                            <li><a href="{{ route('service',$service->slug) }}">{{ $service->shorttitle }}</a></li>
                        @endforeach
                    </ul>
                    <li><a href="{{ route('projects') }}">Proyectos</a></li>
                    <li><a href="{{ route('agency') }}">La Agencia</a></li>
                </ul>
                <ul class="menu main-blue">
                    <li><a href="{{ route('whitepapers') }}">White papers</a></li>
                    <li><a href="http://www.thatzblog.com/" target="_blank">Blog</a></li>
                    <li class="contact-item"><a href="{{ route('contact') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 358.4"><defs><style>.cls-1{fill:#00bde0;}</style></defs><title>Contacto</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M40.49,21.17,224.91,167.25c8.36,6.62,19.89,9.56,31.08,9,11.17.55,22.7-2.37,31.06-9L471.47,21.17C486.25,9.54,482.91,0,464.16,0H47.86C29.09,0,25.75,9.54,40.49,21.17Z"/><path class="cls-1" d="M484.8,59.72l-201.53,153c-7.54,5.66-17.41,8.42-27.24,8.29-9.85.13-19.72-2.65-27.26-8.29L27.2,59.72C12.24,48.38,0,54.46,0,73.22v251A34.24,34.24,0,0,0,34.13,358.4H477.87A34.24,34.24,0,0,0,512,324.27v-251C512,54.46,499.76,48.38,484.8,59.72Z"/></g></g></svg></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8" id="menu-content">

                <div class="row">
                    <ul class="menu little">
                        <li class="main-blue"><a href="{{ route('whitepapers') }}">White papers</a></li>
                        <li class="main-blue"><a href="http://www.thatzblog.com/" target="_blank">Blog</a></li>
                        <li class="contact-item"><a href="{{ route('contact') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 358.4"><defs><style>.cls-1{fill:#00bde0;}</style></defs><title>Contacto</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M40.49,21.17,224.91,167.25c8.36,6.62,19.89,9.56,31.08,9,11.17.55,22.7-2.37,31.06-9L471.47,21.17C486.25,9.54,482.91,0,464.16,0H47.86C29.09,0,25.75,9.54,40.49,21.17Z"/><path class="cls-1" d="M484.8,59.72l-201.53,153c-7.54,5.66-17.41,8.42-27.24,8.29-9.85.13-19.72-2.65-27.26-8.29L27.2,59.72C12.24,48.38,0,54.46,0,73.22v251A34.24,34.24,0,0,0,34.13,358.4H477.87A34.24,34.24,0,0,0,512,324.27v-251C512,54.46,499.76,48.38,484.8,59.72Z"/></g></g></svg>
                                {{--<img id="sobre" src="{{ asset('front/img/header/blue_contact_icon.svg') }}">--}}
{{--                                <img src="{{ asset('front/img/blue_contact_icon.svg') }}">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 358.4"><defs><style>.cls-1{fill:#00bde0;}</style></defs><title>Recurso 1</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M40.49,21.17,224.91,167.25c8.36,6.62,19.89,9.56,31.08,9,11.17.55,22.7-2.37,31.06-9L471.47,21.17C486.25,9.54,482.91,0,464.16,0H47.86C29.09,0,25.75,9.54,40.49,21.17Z"/><path class="cls-1" d="M484.8,59.72l-201.53,153c-7.54,5.66-17.41,8.42-27.24,8.29-9.85.13-19.72-2.65-27.26-8.29L27.2,59.72C12.24,48.38,0,54.46,0,73.22v251A34.24,34.24,0,0,0,34.13,358.4H477.87A34.24,34.24,0,0,0,512,324.27v-251C512,54.46,499.76,48.38,484.8,59.72Z"/></g></g></svg>--}}
                            </a></li>
                        <li style="display: none;"><a href="#"  onclick="SendPushMe();return false">SendPushMe</a></li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="menu">
                        <li class="especializaciones" id="especializaciones">Especializaciones
                            <ul class="dropdown">
                                <li><a href="{{ route('specialization1') }}">Proyectos de e-commerce</a></li>
                                <li><a href="{{ route('specialization3') }}">e-Marketing y publicidad para marcas</a></li>
                                <li><a href="{{ route('specialization2') }}">Publicidad online orientada a resultados</a></li>
                                <li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
                            </ul>
                        </li>
                        <li class="servicios" id="servicios">Servicios
                            <ul class="dropdown">
                                @foreach($services as $service)
                                    <li><a href="{{ route('service',$service->slug) }}">{{ $service->shorttitle }}</a></li>
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

