<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" media="screen" />

</head>

<body class="container">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center py-3 fixed-top" style="background-color: #58B022;">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('anotacoes.index') }}" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('anotacoes.listar') }}" class="nav-link">Anotações</a></li>
        </ul>
    </nav>
    <section class="container d-flex flex-column align-items-center">
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
        @foreach ($anotacoes as $anotacao)
        <div class="card mb-4" style="width: 100%; max-width: 30rem;">
            <img src="{{ asset('storage/imagens/' . $anotacao->imagem) }}" class="card-img-top" alt="Imagem de Fundo" style="width: 100%; height: auto; object-fit: cover; max-height: 200px;">
            <div class="card-body">
                <h5 class="card-title">{{ $anotacao->titulo }}</h5>
                <p class="card-text">{{ $anotacao->descricao }}</p>
            </div>
        </div>
        @endforeach
    </section>
</body>

</html>
