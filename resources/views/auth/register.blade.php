@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card border-0 shadow">
				<div class="card-body">
					<h4 class="card-title text-center mb-4">{{ __('Register') }}</h4>

					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group row mb-4">
							<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
									name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row mb-4">
							<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row mb-4">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

							<div class="col-md-6">
								<input id="password" type="password"
									class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row mb-4">
							<label for="password-confirm"
								class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>

						<div class="d-flex justify-content-end">
							<button type="submit" class="btn btn-primary">
								{{ __('Register') }}
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection