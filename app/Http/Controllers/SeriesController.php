<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::all();
        $mensagemSucesso = session('messagem.sucesso');
        // return view('listar-series', compact('series'));
        return view('series.index') -> with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {
        $serie = Serie::create($request->all());
        // session(['messagem.sucesso' => 'Serie adicionada com sucesso']);
        //$request->session()->flash('messagem.sucesso', "Serie: {$serie->nome} adicionada com sucesso");
        // Serie::create($request->except(['_token']));
        return to_route('series.index')
            ->with('messagem.sucesso', "Serie: {$serie->nome} adicionada com sucesso");
    }

    public function destroy(Serie $series, Request $request) {
        $series->delete();
        //$request->session()->flash('messagem.sucesso', "Serie: {$series->nome} removida com sucesso");
        return to_route('series.index')
            ->with('messagem.sucesso', "Serie: {$series->nome} removida com sucesso");
    }

    public function edit(Serie $series) {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request) {
        $series->nome = $request->nome;
        $series->save();

        return to_route('series.index')
            ->with('messagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }

}
