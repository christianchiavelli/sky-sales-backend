<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ route('home') }}">Loja de Aviões</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			@auth
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('planes.index') }}">Nossos Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('about') }}">Quem Somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('customer') }}">Nossos Clientes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('contact') }}">Contato</a>
				</li>
			</ul>
			@endauth
		</div>
		<ul class="navbar-nav">
			@auth
			<li class="nav-item">
				<span class="nav-link">Olá, {{ Auth::user()->name }}</span>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('logout') }}"
					onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					Sair
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</li>
			@endauth

			@guest
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">Registrar</a>
			</li>
			@endguest
		</ul>
	</div>
</nav>