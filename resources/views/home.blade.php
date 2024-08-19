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
    <nav class="navbar navbar-expand-lg d-flex justify-content-center py-3" style="background-color: #58B022;">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link " aria-current="page">Home</a></li>
            <li class="nav-item"><a href="notes" class="nav-link ">Anotações</a></li>
            <li class="nav-item"><a href="" class="nav-link ">About</a></li>
        </ul>
    </nav>
    <section class="container-fluid d-flex justify-content-center align-items-center">
        <div class="card d-flex justify-content-center m-5" style="width: 30rem;">
            <img src="imagens/bgcard.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="title" name="title" >Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn" style="background-color: #58B022; color:#E5E5E5;">Go somewhere</a>
            </div>
        </div>
    </section>
</body>

</html>
