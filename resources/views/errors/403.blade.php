@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center">
  <div class="text-center">
    <div class="display-1 text-danger mb-3">
      <i class="bi bi-exclamation-triangle-fill"></i>
    </div>
    <h1 class="display-3">403</h1>
    <h3 class="fs-3 my-4">Oops! Você não tem permissão para acessar esta página.</h3>
    <p class="fs-5 text-muted mb-4">Parece que você tentou acessar um recurso ao qual não tem acesso. Por favor, faça login com a conta correta ou entre em contato com o administrador se acredita que isso é um erro.</p>
    <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4 py-2">Voltar para Home</a>
  </div>
</div>
@endsection
