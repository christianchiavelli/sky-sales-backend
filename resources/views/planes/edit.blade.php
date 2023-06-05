@extends('layouts.app')

@section('content')

<div class="container py-5">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="mb-4">Editar Avião</h2>
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

	<div class="card">
		<div class="card-body">
			<form action="{{ route('planes.update',$plane->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<div class="row mb-3">
					<div class="col-md-4 col-12">
						<label class="form-label" for="model"><strong>Modelo</strong></label>
						<input type="text" id="model" name="model" value="{{ $plane->model }}" class="form-control"
							placeholder="Modelo">
					</div>

					<div class="col-md-4 col-12">
						<label class="form-label" for="manufacturer"><strong>Fabricante</strong></label>
						<input type="text" id="manufacturer" name="manufacturer" value="{{ $plane->manufacturer }}"
							class="form-control" placeholder="Fabricante">
					</div>

					<div class="col-md-4 col-12">
						<label class="form-label" for="year"><strong>Ano</strong></label>
						<input type="number" id="year" name="year" value="{{ $plane->year }}" class="form-control"
							placeholder="Ano">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-4 col-12">
						<label class="form-label" for="seats"><strong>Assentos</strong></label>
						<input type="number" id="seats" name="seats" value="{{ $plane->seats }}" class="form-control"
							placeholder="Assentos">
					</div>

					<div class="col-md-4 col-12">
						<label class="form-label" for="runway_length"><strong>Comprimento da Pista</strong></label>
						<input type="number" id="runway_length" name="runway_length" value="{{ $plane->runway_length }}"
							class="form-control" placeholder="Comprimento da Pista">
					</div>

					<div class="col-md-4 col-12">
						<label class="form-label" for="price"><strong>Preço</strong></label>
						<input type="number" id="price" step="0.01" name="price" value="{{ $plane->price }}" class="form-control"
							placeholder="Preço">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-4 col-12">
						<label class="form-label" for="image"><strong>Imagem</strong></label>
						<input type="file" id="image" name="image" class="form-control">
					</div>
				</div>

				<div class="d-flex justify-content-center">
					<button type="submit" class="btn btn-primary px-4">Salvar</button>
				</div>
			</form>

			<div class="d-flex justify-content-start mt-3">
				<a href="{{ route('planes.index') }}" class="text-primary text-decoration-none">
					Voltar
				</a>
			</div>

		</div>
	</div>
</div>

@endsection