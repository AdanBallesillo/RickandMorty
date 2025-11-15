<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RickController extends Controller
{
    public function index()
    {
        // Obtener personajes
        $characters = Http::get("https://rickandmortyapi.com/api/character")->json();

        return view('rick.index', [
            'characters' => $characters['results']
        ]);
    }

    public function show($id)
    {
        // Obtener personaje
        $character = Http::get("https://rickandmortyapi.com/api/character/$id")->json();

        // Obtener ubicación
        $origin = null;
        if (!empty($character['origin']['url'])) {
            $origin = Http::get($character['origin']['url'])->json();
        }

        // Obtener episodios
        $episodes = [];
        foreach (array_slice($character['episode'], 0, 3) as $episodeUrl) {
            $episodes[] = Http::get($episodeUrl)->json();
        }

        return view('rick.show', compact('character', 'origin', 'episodes'));
    }
    public function episode($id)
{
    $episode = Http::get("https://rickandmortyapi.com/api/episode/$id")->json();

    // Obtener personajes del episodio
    $characters = [];
    foreach ($episode['characters'] as $charUrl) {
        $characters[] = Http::get($charUrl)->json();
    }

    return view('rick.episode', compact('episode', 'characters'));
}

}
