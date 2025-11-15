<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty - Personajes</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="body">

    <h1 class="title">Lista de Personajes Rick and Morty</h1>

    <div class="grid">
        @foreach ($characters as $c)
            <div class="card">
                <img src="{{ $c['image'] }}" class="card-img" alt="">
                
                <h4 class="card-title">{{ $c['name'] }}</h4>
                <p class="card-sub">{{ $c['species'] }}</p>

                <a href="{{ route('rick.show', $c['id']) }}" class="btn">Ver más</a>
            </div>
        @endforeach
    </div>

</body>
</html>
