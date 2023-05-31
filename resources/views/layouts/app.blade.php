<!DOCTYPE html>
<html lang="pt-br">

	@include('partials.head')

	<body>
		@include('partials.navbar')

		<div class="container mt-5">
			@yield('content')
		</div>

		@include('partials.footer')
	</body>

</html>