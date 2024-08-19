<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notes.css') }}" media="screen" />

</head>

<body class="container">
    <nav class="navbar navbar-expand-lg d-flex justify-content-center py-3" style="background-color: #58B022;">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link " aria-current="page">Home</a></li>
            <li class="nav-item"><a href="notes" class="nav-link ">Anotações</a></li>
            <li class="nav-item"><a href="" class="nav-link ">About</a></li>
        </ul>
    </nav>
    <section class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comprar leite</h5>
                    <p class="card-text">Detalhes adicionais sobre a tarefa.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Estudar para a prova</h5>
                    <p class="card-text">Detalhes adicionais sobre a tarefa.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lavar o carro</h5>
                    <p class="card-text">Detalhes adicionais sobre a tarefa.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
