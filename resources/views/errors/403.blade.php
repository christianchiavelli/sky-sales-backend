@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="display-3 text-center">403</h2>
      <h3 class="display-5 text-center">Oops! Você não tem permissão para acessar esta página.</h3>
      <p class="text-center">Parece que você tentou acessar um recurso ao qual não tem acesso. Por favor, faça login com a conta correta ou entre em contato com o administrador se acredita que isso é um erro.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        <a href="{{ route('home') }}" class="btn btn-primary">Voltar para Home</a>
      </div>
    </div>
  </div>
</div>
@endsection
