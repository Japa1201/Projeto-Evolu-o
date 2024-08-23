<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detalhes da Anotação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notes.css') }}" media="screen" />

</head>

<body class="container">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center py-3" style="background-color: #58B022;">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('anotacoes.index') }}" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="show" class="nav-link">Anotações</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </nav>

    <header class="sub-header d-flex justify-content-between align-items-center py-2">
        <h2>Gerenciamento de anotações</h2>
        <a id="btn-create-header" class="btn btn-success btn-sm" href="{{ route('anotacoes.create') }}" title="Criar Nova Anotação">
            +
        </a>
    </header>

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

    <section class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            @foreach ($anotacoes as $anotacao)
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">{{ $anotacao->titulo }}</h5>
                        <p class="card-text">{{ $anotacao->descricao }}</p>
                    </div>
                    <div>
                        <a href="{{ route('anotacoes.edit' , $anotacao->id) }}">
                            <img src="{{ asset('imagens/icon-editar.png') }}" class="icon-lista ms-2" title="Alterar">
                        </a>
                        <form action="{{ route('anotacoes.destroy', $anotacao->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link p-0" title="Excluir" onclick="return confirm('Tem certeza de que deseja excluir esta anotação?');">
                                <img src="{{ asset('imagens/icon-excluir.png') }}" class="icon-lista ms-2" title="Excluir">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</body>

</html>
