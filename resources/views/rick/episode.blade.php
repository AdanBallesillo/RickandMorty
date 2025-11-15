<!DOCTYPE html>
<html>
  <html lang="en"></html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rick.css">
    <title>{{ $episode['name'] }}</title>
</head>
<body>

<div class="card-personaje">

    <h1>{{ $episode['episode'] }} - {{ $episode['name'] }}</h1>

    <h2>Información del episodio</h2>
    <ul class="info-list">
        <li><strong>Aire:</strong> {{ $episode['air_date'] }}</li>
        <li><strong>Episodio:</strong> {{ $episode['episode'] }}</li>
    </ul>

    <h2>Personajes que aparecen</h2>

    <div class="grid-chars">
        @foreach ($characters as $char)
            <div class="char-card">
                <img src="{{ $char['image'] }}" alt="">
                <p>{{ $char['name'] }}</p>
                <a href="{{ route('rick.show', $char['id']) }}">Ver personaje</a>
            </div>
        @endforeach
    </div>

    <a class="btn-volver" href="{{ route('rick.index') }}">⟵ Volver</a>

</div>

</body>
</html>
