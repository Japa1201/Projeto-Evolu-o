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

    <style>
        .form-control.custom-border {
            border: 2px solid #ced4da;
            /* Cor da borda */
            border-radius: .375rem;
            /* Arredondamento dos cantos */
        }

        .form-control.custom-border:focus {
            border-color: #80bdff;
            /* Cor da borda ao focar */
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .25);
            /* Sombra ao focar */
        }
    </style>
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center py-3 fixed-top" style="background-color: #58B022;">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('anotacoes.index') }}" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('anotacoes.listar') }}" class="nav-link">Anotações</a></li>
        </ul>
    </nav>

    <section class="container-fluid d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="col-md-6">
            <!-- MENSAGEM DE ERRO DO BACK -->
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <!-- MENSAGEM DE ERROS DE VALIDAÇÃO -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- MENSAGEM DE SUCESSO DO BACK -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('anotacoes.update', $anotacoes->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control custom-border" id="titulo" name="titulo" placeholder="Digite o título" value="{{ old('titulo', $anotacoes->titulo) }}" required>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control custom-border" id="descricao" name="descricao" rows="3" placeholder="Digite a descrição" value="{{ old('descricao', $anotacoes->descricao) }}" required>{{ old('descricao', $anotacoes->descricao) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Upload de Arquivo</label>
                    <input class="form-control custom-border" type="file" id="imagem" name="imagem">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary mx-2" type="submit">Enviar Formulário</button>
                    <a href="{{ route('anotacoes.index') }}" class="btn btn-danger mx-2" role="button">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
