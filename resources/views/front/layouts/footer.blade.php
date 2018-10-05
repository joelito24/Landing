@include('front.static.cookies')
<footer class="footer">
	<div class="">
		<div class="">
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<a href="{{ route('home') }}"><img class="logo" src="{{ asset('front/img/home/logo.png') }}" alt=""></a>
							</div>
							<div class="col-md-6 col-sm-8">
								<div class="slogan">
									<p>Marketing por vocación.</p>
									<p>Digitales por naturaleza.</p>
								</div>
								<img class="gorila" src="{{ asset('front/img/home/gorila.png') }}" alt="">
							</div>
							<div class="col-sm-2 col-partners">
								<script src="https://apis.google.com/js/platform.js" async defer></script>
								<div style="float: right;" class="g-partnersbadge" data-agency-id="1589660341"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-4">
								<p class="title-menu">CONTÁCTANOS</p>
								<div class="contact">
									<a href="tel:+34936350620">+34 936 350 620</a>
									<img id="emaillink" style="margin-bottom: 10px;cursor: pointer;" src="{{ asset('front/img/hola-footer.png') }}" alt="">
									<div class="address">
										<p>C/ Marqués de Mulhacén 11 bajos 2</p>
										<p>Barcelona 08034</p>
									</div>
								</div>
								<div class="red-social">
									<p>
								<span>
									<a target="_blank" href="https://twitter.com/thatzad"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><style>.cls-1{fill:#023c4e;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M100,0A100,100,0,1,0,200,100,100.11,100.11,0,0,0,100,0Zm44.61,77.11c0,1,.07,2,.07,3,0,30.42-23.15,65.48-65.49,65.48a65.1,65.1,0,0,1-35.28-10.33A46.48,46.48,0,0,0,78,125.71a23,23,0,0,1-21.5-16,23.11,23.11,0,0,0,10.39-.39A23,23,0,0,1,48.41,86.77c0-.1,0-.2,0-.29a22.92,22.92,0,0,0,10.42,2.88,23.05,23.05,0,0,1-7.12-30.73A65.35,65.35,0,0,0,99.15,82.68a23,23,0,0,1,39.22-21A45.94,45.94,0,0,0,153,56.1a23.12,23.12,0,0,1-10.13,12.74,45.76,45.76,0,0,0,13.22-3.62A46.3,46.3,0,0,1,144.61,77.11Z"/></g></g></svg></a>
								</span>
										<span>
									<a target="_blank" href="https://www.linkedin.com/company/thatzad.-that%27s-advertising-/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><style>.cls-1{fill:#023c4e;}</style></defs><title></title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><polygon class="cls-1" points="110.69 87.88 110.69 87.7 110.52 87.88 110.69 87.88"/><path class="cls-1" d="M100,0A100,100,0,1,0,200,100,100,100,0,0,0,100,0ZM73.62,149.2H49.73V77.36H73.62ZM61.68,67.74H61.5c-8,0-13.19-5.53-13.19-12.48,0-7.13,5.35-12.48,13.55-12.48,8,0,13.19,5.35,13.37,12.48C75.22,62.21,70.05,67.74,61.68,67.74Zm98,81.46H135.83V110.87c0-9.63-3.39-16.22-12.12-16.22-6.6,0-10.52,4.46-12.3,8.73-.71,1.6-.71,3.74-.71,5.88v40.11H86.81s.36-65.06,0-71.84H110.7V87.7c3.21-4.81,8.91-11.94,21.57-11.94,15.69,0,27.45,10.16,27.45,32.26Z"/></g></g></svg></a>
								</span></p>
								</div>
								<div class="google-partner-movile">
									<script src="https://apis.google.com/js/platform.js" async defer></script>
									<div style="float: right;" class="g-partnersbadge" data-agency-id="1589660341"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<p class="title-menu">Especializaciones</p>
								<ul class="menu-footer">
									<li><a href="{{ route('specialization1') }}">Proyectos de eCommerce</a></li>
									<li><a href="{{ route('specialization3') }}">eMarketing y publicidad para marcas</a></li>
									<li><a href="{{ route('specialization2') }}">Publicidad online orientada a resultados</a></li>
									<li><a href="{{ route('specialization4') }}">Transformación digital para empresas</a></li>
								</ul>
							</div>
							<div class="col-sm-6 col-md-4">
								<p class="title-menu">Información</p>
								<ul class="menu-footer gray">
									<li><a href="{{ route('generals') }}">Política de privacidad</a></li>
									<li><a href="{{ route('politica') }}">Política de cookies</a></li>
									<li><a href="{{ route('aviso') }}">Aviso legal</a></li>
								</ul>
								<p class="copy">Thatzad Copyright 2018</p>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</footer>