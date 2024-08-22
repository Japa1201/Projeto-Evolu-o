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
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </section>
</body>

</html>
