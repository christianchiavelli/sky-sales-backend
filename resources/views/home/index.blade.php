@extends('layouts.app')

@section('content')

<div class="container py-5">

	<div class="row">
		<div class="col-lg-12 text-center mb-5">
			<h1 class="display-4">Bem-vindo à nossa Loja de Aviões</h1>
			<p class="lead text-muted">Com mais de uma década de experiência, oferecemos a mais ampla variedade de aviões à
				venda. Nós garantimos qualidade e satisfação.</p>
		</div>
	</div>

	<div class="row mb-5">
		<div class="col-lg-12">
			<div class="card bg-light border-0">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<h2 class="fs-4 card-title">Nossa História</h2>
							<p class="card-text fs-5 text-muted">Com mais de 10 anos no mercado, temos uma vasta experiência no setor
								de aviação. Começamos como uma pequena loja e hoje somos um dos maiores fornecedores de aeronaves do
								país.</p>
						</div>
						<div class="col-lg-6">
							<img src="{{ asset('storage/images/home/our-history.svg') }}" alt="Nossa História" class="img-fluid"
								style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-5">
		<div class="col-lg-12">
			<div class="card bg-light border-0">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
							<h2 class="fs-4 card-title">Nossa Missão</h2>
							<p class="card-text fs-5 text-muted">Nossa missão é fornecer aviões de alta qualidade com excelente
								serviço ao cliente. Estamos comprometidos em ajudar nossos clientes a encontrar o avião perfeito para
								suas necessidades.</p>
						</div>
						<div class="col-lg-6 order-lg-1">
							<img src="{{ asset('storage/images/home/our-mission.svg') }}" alt="Nossa Missão" class="img-fluid"
								style="opacity:0;transition: opacity 1s;" onload="this.style.opacity=1">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection