@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center">
  <div class="text-center">
    <div class="display-1 text-danger mb-3">
      <i class="bi bi-exclamation-circle-fill"></i>
    </div>
    <h1 class="display-3">404</h1>
    <h3 class="fs-3 my-4">Oops! A página que você está procurando não existe.</h3>
    <p class="fs-5 text-muted mb-4">Parece que você tentou acessar uma página que foi removida ou que nunca existiu. Tente verificar a URL, voltar para a página anterior ou voltar para a página inicial.</p>
    <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4 py-2">Voltar para Home</a>
  </div>
</div>
@endsection
