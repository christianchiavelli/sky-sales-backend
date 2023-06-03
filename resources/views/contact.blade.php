@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="mb-4">Contato</h2>
			<p class="lead">
				Entre em contato conosco. Estamos ansiosos para ouvir de você!
			</p>
		</div>
	</div>

	<div class="row mb-5">
		<div class="col-lg-6">
			<div class="card mb-4">
				<div class="card-body">
					<h4 class="card-title">Informações de Contato</h4>
					<p class="card-text">
						<strong>Email:</strong> info@skysales.com<br>
						<strong>Telefone:</strong> (11) 1234-5678<br>
						<strong>Endereço:</strong> Rua dos Aviadores, 123, São Paulo, SP
					</p>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="card mb-4">
				<div class="card-body">
					<h4 class="card-title">Formulário de Contato</h4>
					<form>
						<div class="mb-3">
							<label for="name" class="form-label">Nome</label>
							<input type="text" class="form-control" id="name" placeholder="Seu nome">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
						</div>
						<div class="mb-3">
							<label for="message" class="form-label">Mensagem</label>
							<textarea class="form-control" id="message" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection