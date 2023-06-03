@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="mb-4">Nossos Clientes</h2>
			<p class="lead">
				Estamos orgulhosos de trabalhar com uma variedade de clientes incríveis. Aqui estão alguns deles:
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-1.svg') }}" alt="Fly High Aviation"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">Fly High Aviation</h4>
					<p class="card-text">"Trabalhar com a Loja de Aviões tem sido uma experiência verdadeiramente transformadora.
						A qualidade dos aviões que compramos é incomparável."</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-2.svg') }}" alt="Elevate Air Travel"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">Elevate Air Travel</h4>
					<p class="card-text">"Nunca fomos decepcionados com a Loja de Aviões. Seus aviões são de alta qualidade e o
						serviço é sempre de primeira linha."</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-3.svg') }}" alt="AeroSpace Dynamics"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">AeroSpace Dynamics</h4>
					<p class="card-text">"Nunca fomos decepcionados com a Loja de Aviões. Seus aviões são de alta qualidade e o
						serviço é sempre de primeira linha."</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-4.svg') }}" alt="JetStream Airlines"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">JetStream Airlines</h4>
					<p class="card-text">"A Loja de Aviões nos ajudou a modernizar nossa frota com seus aviões excelentes. Nossos
						passageiros amam o conforto e a segurança que eles oferecem."</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-5.svg') }}" alt="Skyward Bound"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">Skyward Bound</h4>
					<p class="card-text">"O serviço personalizado e a qualidade dos aviões da Loja de Aviões são simplesmente
						incríveis. Eles realmente se importam com nossas necessidades."</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="{{ asset('storage/images/customers/customer-6.svg') }}" alt="Horizon Explorers"
					style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
				<div class="card-body">
					<h4 class="card-title">Horizon Explorers</h4>
					<p class="card-text">"Loja de Aviões nunca falha em fornecer produtos e serviços de alta qualidade. Eles são
						um parceiro valioso na nossa jornada de aviação."</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection