@extends('layouts.app')

@section('content')

<div class="container py-5">
	<div class="row">
		<div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
			<h2 class="mb-4">Comprar Avião</h2>

			@if(Session::has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ Session::get('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
				@php
				Session::forget('success');
				@endphp
			</div>
			@endif

			@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Ops!</strong> Há problemas com os dados que você inseriu.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div class="card mb-3" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-md-4 position-relative">
						<img src="{{ asset($plane->image) }}" alt="{{ $plane->model }}" class="img-fluid w-100 h-100 bg-light">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">{{ $plane->model }}</h5>
							<p class="card-text text-secondary">
								<span>Fabricante: {{ $plane->manufacturer }} </span><br>
								<span>Ano: {{ $plane->year }} </span><br>
								<span>Assentos: {{ $plane->seats }} </span><br>
								<span>Comprimento da Pista: {{ $plane->runway_length }} </span><br>
								<span>Preço: R${{ number_format($plane->price, 2, ',', '.') }} </span><br>
							</p>
							<p class="card-text"><small class="text-muted">Confirme as informações acima antes de continuar com a
									compra.</small></p>
						</div>
					</div>
				</div>
			</div>

			<button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#purchaseModal">
				Comprar
			</button>

			<div class="d-flex justify-content-start mt-3">
				<a href="{{ route('planes.index') }}" class="text-primary text-decoration-none">
					Voltar
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="purchaseModalLabel">Compra Realizada</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				Sua compra foi realizada com sucesso! Verifique seu e-mail para mais informações.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

@endsection