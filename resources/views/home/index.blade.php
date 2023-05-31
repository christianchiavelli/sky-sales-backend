@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mb-2 text-center">
                <h2>Bem-vindo à nossa Loja de Aviões</h2>
                <p>Explore nossa variedade de aviões à venda. Garantimos qualidade e satisfação.</p>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-success" href="{{ route('planes.index') }}">Nossos Aviões</a>
            </div>
        </div>
    </div>
@endsection
