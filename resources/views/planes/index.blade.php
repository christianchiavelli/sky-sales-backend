@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="mb-2">
			<h2>Nossos Aviões</h2>
			<p>Explore nossa variedade de aviões à venda. Garantimos qualidade e satisfação.</p>
		</div>
	</div>
</div>

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
				<a href="{{ route('planes.show',$plane->id) }}" class="btn btn-light">Veja Mais</a>
				<a href="{{ route('planes.edit', $plane->id) }}" class="btn btn-primary">Editar</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection