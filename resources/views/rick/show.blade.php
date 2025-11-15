<!DOCTYPE html>
<html>
  <html lang="en"></html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rick.css">
    <title>{{ $character['name'] }}</title>
</head>
<body>

<div class="card-personaje">
    <h1>{{ $character['name'] }}</h1>

    <img src="{{ $character['image'] }}" alt="">

    <h2>Información del personaje</h2>
    <ul class="info-list">
        <li><strong>Especie:</strong> {{ $character['species'] }}</li>
        <li><strong>Estado:</strong> {{ $character['status'] }}</li>
        <li><strong>Género:</strong> {{ $character['gender'] }}</li>
    </ul>

    <h2>Origen</h2>
    @if($origin)
        <ul class="info-list">
            <li><strong>Nombre:</strong> {{ $origin['name'] }}</li>
            <li><strong>Tipo:</strong> {{ $origin['type'] }}</li>
            <li><strong>Dimensión:</strong> {{ $origin['dimension'] }}</li>
        </ul>

        
    @else
        <p>No disponible</p>
    @endif

    <h2>Episodios</h2>
    <ul class="info-list">
        @foreach ($episodes as $ep)
            <li>
                <a href="{{ route('episode.show', $ep['id']) }}">
                    {{ $ep['episode'] }} - {{ $ep['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <a class="btn-volver" href="{{ route('rick.index') }}">⟵ Volver</a>
</div>

</body>
</html>
