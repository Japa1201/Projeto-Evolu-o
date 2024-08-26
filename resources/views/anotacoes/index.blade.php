@extends('component.layout')

@section('title', 'Index')

@section('content')
<div class="container">
    <!-- MENSAGEM DE ERRO DO BACK -->
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- MENSAGEM DE SUCESSO DO BACK -->
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <!-- Lista de Anotações -->
    <div class="row justify-content-center">
        @foreach ($anotacoes as $anotacao)
        <div class="col-12 mb-4 d-flex justify-content-center">
            <div class="card border border-gray p-1 mb-1" style="width: 100%; max-width: 30rem; background-color: gray;">
                @if ($anotacao->imagem)
                <img src="{{ asset('storage/imagens/' . $anotacao->imagem) }}" class="card-img-top" alt="Imagem de Anotação" style="width: 100%; height: auto; object-fit: cover; max-height: 200px;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $anotacao->titulo }}</h5>
                    <p class="card-text">{{ $anotacao->descricao }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
