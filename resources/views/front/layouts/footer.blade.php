<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="top-footer">
				<div class="col-sm-3">
					<a href="{{ route('home') }}"><img class="logo" src="{{ asset('front/img/home/logo.png') }}" alt=""></a>
					<div class="contact">
						<a>+34 936 350 620</a>
						<a>hola@thatzad.com</a>
						<div class="address">
							<p>C/ Marqués de Mulhacén 11 bajos 2, 08034 Barcelona</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<ul class="menu-footer">
						<li><a href="{{ route('specialization1') }}">Proyectos de e-Commerce</a></li>
						<li><a href="{{ route('specialization2') }}">Transformación digital para empresas</a></li>
						<li><a href="{{ route('specialization3') }}">e-Marketing y publicidad para marcas</a></li>
						<li><a href="{{ route('specialization4') }}">Campañas orientadas a resultados</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="menu-footer gray">
						<li><a href="{{ route('whitepapers') }}">Aviso legal y política de privacidad</a></li>
						<li><a href="http://www.thatzblog.com/">Política de cookies</a></li>
						<li><a href="{{ route('contact') }}">Condiciones generales</a></li>
					</ul>

				</div>
				<div class="col-sm-3 col-last">
					<script src="https://apis.google.com/js/platform.js" async defer></script>
					<div style="float: right;" class="g-partnersbadge" data-agency-id="1589660341"></div>
					{{--<img class="google" src="{{ asset('front/img/home/google-partner.png') }}" alt="">--}}
					<div class="slogan">
						<p>Marketing por vocación.</p>
						<p>Digitales por naturaleza.</p>
					</div>
				</div>
				<img class="gorila" src="{{ asset('front/img/home/gorila.png') }}" alt="">
			</div>


		</div>
	</div>
	<div class="footer-bottom">
		<p class="footerphrase">
			Thatzad Copyright 2018
		</p>
	</div>
</footer>