@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card border-0 shadow">
				<div class="card-body">
					<h4 class="card-title text-center mb-4">{{ __('Login') }}</h4>

					<form method="POST" action="{{ route('login') }}">
						@csrf

						@if ($errors->any())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
							<div>{{ $error }}</div>
							@endforeach
						</div>
						@endif

						<div class="form-group row mb-4">
							<label for="email" class="col-sm-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									name="email" value="{{ old('email') }}" required autofocus>
							</div>
						</div>

						<div class="form-group row mb-4">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

							<div class="col-md-6">
								<input id="password" type="password"
									class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6 offset-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
										? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Lembrar-me') }}
									</label>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6 offset-md-4 d-grid mt-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Login') }}
								</button>
							</div>
						</div>

						<div class="d-flex justify-content-center mt-3">
							<p>
								Não tem uma conta ainda?
								<a href="{{ route('register') }}">Registre-se</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection