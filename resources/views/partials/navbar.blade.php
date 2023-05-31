<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ route('home') }}">Loja de Aviões</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('planes.index') }}">Nossos Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Quem Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Nossos Clientes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contato</a>
				</li>
			</ul>
		</div>
	</div>
</nav>