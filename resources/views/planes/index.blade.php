@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="mb-2">
			<h2>Nossos Aviões</h2>
			<p>Explore nossa variedade de aviões à venda. Garantimos qualidade e satisfação.</p>
		</div>
		<div class="d-flex justify-content-between">
			<h3></h3>
			<a class="btn btn-primary mb-4" href="{{ route('planes.create') }}"> Adicionar Avião</a>
		</div>
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

<div class="row">
	@foreach ($planes as $plane)
	<div class="col-md-4">
		<div class="card mb-4">
			<img src="{{ asset($plane->image) }}" class="card-img-top" alt="Image for {{ $plane->model }}">
			<div class="card-body">
				<h5 class="card-title">{{ $plane->model }}</h5>
				<p class="card-text">
					Fabricante: {{ $plane->manufacturer }} <br>
					Ano: {{ $plane->year }} <br>
					Assentos: {{ $plane->seats }} <br>
					Comprimento da Pista: {{ $plane->runway_length }} <br>
					Preço: {{ $plane->price }}
				</p>
				<div class="d-flex justify-content-between">
					<a href="{{ route('planes.show', $plane->id) }}" class="btn btn-light">Veja Mais</a>
					<div>
						<a href="{{ route('planes.edit', $plane->id) }}" class="btn btn-primary">Editar</a>
						<button type="button" class="btn btn-danger" data-bs-toggle="modal"
							data-bs-target="#deleteModal{{ $plane->id }}">Excluir</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="deleteModal{{ $plane->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
					</div>
					<div class="modal-body">
						Tem certeza que deseja excluir este avião?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
						<form action="{{ route('planes.destroy', $plane->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Excluir</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection