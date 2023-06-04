@extends('layouts.app')

@section('content')

<div class="container py-5">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="mb-4">Detalhes do Avião</h2>
		</div>
	</div>

	@if(Session::has('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ Session::get('success') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
		@php
		Session::forget('success');
		@endphp
	</div>
	@endif

	<div class="card">
		<div class="card-body">

			<div class="row mb-3">
				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Modelo</strong></label>
					<p>{{ $plane->model }}</p>
				</div>

				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Fabricante</strong></label>
					<p>{{ $plane->manufacturer }}</p>
				</div>

				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Ano</strong></label>
					<p>{{ $plane->year }}</p>
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Assentos</strong></label>
					<p>{{ $plane->seats }}</p>
				</div>

				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Comprimento da Pista</strong></label>
					<p>{{ $plane->runway_length }}</p>
				</div>

				<div class="col-md-4 col-12">
					<label class="form-label"><strong>Preço</strong></label>
					<p>{{ $plane->price }}</p>
				</div>
			</div>

			<div class="d-flex justify-content-start mt-3">
				<a href="{{ route('planes.index') }}" class="text-primary text-decoration-none">
					Voltar
				</a>
			</div>

		</div>
	</div>
</div>

@endsection