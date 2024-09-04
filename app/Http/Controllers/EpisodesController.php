<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodesController {
    public function index(Season $season) {
        return view('episodes.index', [
            'episodes' => $season->episodes,
            'mensagemSucesso' => session('mensagem.sucesso')
        ]);
    }

    public function update(Request $request, Season $season) {
        $watchedEpisodes = $request->input('episodes', []);

        $watchedEpisodeIds = is_array($watchedEpisodes) ? array_filter($watchedEpisodes, 'is_numeric') : [];

        $season->episodes()
            ->whereNotIn('id', $watchedEpisodeIds)
            ->update(['watched' => false]);

        if (!empty($watchedEpisodeIds)) {
            $season->episodes()
                ->whereIn('id', $watchedEpisodeIds)
                ->update(['watched' => true]);
        }

        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', 'Episódios marcados como assistidos');
    }
}