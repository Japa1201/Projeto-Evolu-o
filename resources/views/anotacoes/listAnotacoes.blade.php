@extends('component.layout')

@section('title', 'list')

@section('content')

<!-- MENSAGEM DE ERRO DO BACK -->
@if (session('error'))
<div class="alert alert-danger mt-3 text-center">
    {{ session('error') }}
</div>
@endif

<!-- MENSAGEM DE SUCESSO DO BACK -->
@if (session('status'))
<div class="alert alert-success mt-3 text-center">
    {{ session('status') }}
</div>
@endif

<section class="container mt-4">
    <header class="sub-header d-flex justify-content-between align-items-center py-2 mt-5 pt-5">
        <h2>Gerenciamento de anotações</h2>
        <!-- Botão de Criar -->
        <a id="btn-create-header" class="btn text-white btn-sm fs-6 fw-bold border border-success p-2 mb-2" href="{{ route('anotacoes.create') }}" title="Criar Nova Anotação" style="background-color: #58B022;">
            Criar +
        </a>
    </header>
    @foreach ($anotacoes as $anotacao)
    <div class="card mb-3">
        <div class="card-body rounded" style="background-color: gray;">
            <div class="row">
                <!-- Coluna para o texto -->
                <div class="col-md-8">
                    <h5 class="card-title">{{ $anotacao->titulo }}</h5>
                    <p class="card-text">{{ $anotacao->descricao }}</p>
                </div>
                <!-- Coluna para os botões -->
                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <!-- Botão de Editar -->
                    <a href="{{ route('anotacoes.edit', $anotacao->id) }}" class="btn p-0 me-2" title="Alterar" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; box-shadow: none; border: none; background: transparent;">
                        <img src="{{ asset('imagens/icon-editar.png') }}" alt="Editar" style="width: 40px; height: 40px; border-radius: 50%; background-color: #fff;">
                    </a>
                    <!-- Botão de Excluir -->
                    <form action="{{ route('anotacoes.destroy', $anotacao->id) }}" method="POST" class="p-0 m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn p-0" title="Excluir" onclick="return confirm('Tem certeza de que deseja excluir esta anotação?');" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; box-shadow: none; border: none; background: transparent;">
                            <img src="{{ asset('imagens/icon-excluir.png') }}" alt="Excluir" style="width: 40px; height: 40px; border-radius: 50%; background-color: #fff;">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
