@extends('front.layouts.master')

@section('content')

    <section class="service">
    	<div class="container" style="    BACKGROUND: transparent;
    position: absolute;
    z-index: 10000;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;top: 10px;">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="blue-word">SERVICIOS</div>
					<h2 class="title-service">{{ $service->title }}</h2>
    			</div>
				
			</div>
    	</div>
    	<div class="text-service">
    		<div class="container">
	    		<div class="row">
	    			<div class="col-sm-12 top-page">
	        			{!! $service->about !!}
	    			</div>
	    			<div class="col-md-6 text-page">
	    				<div class="description1">{!! $service->description1 !!}</div>
	        			<div class="quote">"{!! $service->quote !!}"</div>
	        			<div class="description2">{!! $service->description2 !!}</div>
	    			</div>
	    			<div class="col-md-6">
	    				<img src="{{ $service->image1 }}">
	    			</div>
	    			
	    		</div>
	    	</div>
    	</div>
    	
    	<div class="conclusion-service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6">
    					<div class="conclusion">{!! $service->conclusion !!}</div>
    				</div>
    				<div class="col-md-6">
    					<img src="{{ $service->image2 }}">
    				</div>
    			</div>
    		</div>
		</div>
		<div class="contact-block">
			<div class="container">
				<div class="row">
					<div class="col-md-11 col-md-offset-1">
						<p class="big-title">Explícanos tu proyecto y objetivos y diseñaremos juntos una estrategia 100% efectiva</p>
						<div class="btn-yellow-full"><a href="{{ route('contact') }}">Contáctanos</a></div>
					</div>
				</div>
			</div>
		</div>
    </section>

@stop

@section('titles')
    <title>Thatzad</title>
    <meta name="description" content="">
@endsection
