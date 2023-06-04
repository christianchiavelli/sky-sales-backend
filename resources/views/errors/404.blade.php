@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="display-3 text-center">404</h2>
      <h3 class="display-5 text-center">Oops! A página que você está procurando não existe.</h3>
      <p class="text-center">Parece que você tentou acessar uma página que foi removida ou que nunca existiu. Tente verificar a URL, voltar para a página anterior ou voltar para a página inicial.</p>
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
