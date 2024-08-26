@extends('component.layout')

@section('title', 'edit')

@section('content')
<!-- MENSAGEM DE ERRO DO BACK -->
@if (session('error'))
<div class="alert alert-danger text-center mt-3">
    {{ session('error') }}
</div>
@endif

<!-- MENSAGEM DE ERROS DE VALIDAÇÃO -->
@if ($errors->any())
<div class="alert alert-danger text-center mt-3">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- MENSAGEM DE SUCESSO DO BACK -->
@if (session('status'))
<div class="alert alert-success text-center mt-3">
    {{ session('status') }}
</div>
@endif

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-secondary rounded p-5">
            <form method="POST" action="{{ route('anotacoes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control custom-border" id="titulo" name="titulo" placeholder="Digite o título" value="{{ old('titulo') }}" required>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control custom-border" id="descricao" name="descricao" rows="3" placeholder="Digite a descrição" required>{{ old('descricao') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Upload de Arquivo</label>
                    <input class="form-control custom-border" type="file" id="imagem" name="imagem">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mx-2" type="submit">Enviar Formulário</button>
                    <a href="{{ route('anotacoes.index') }}" class="btn btn-danger mx-2" role="button">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
