<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository) {
    }

    public function index(Request $request) {
        $series = Series::all();

        $mensagemSucesso = session('messagem.sucesso');
        // return view('listar-series', compact('series'));
        return view('series.index') -> with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {
        $serie = $this->repository->add($request);

        // session(['messagem.sucesso' => 'Serie adicionada com sucesso']);
        //$request->session()->flash('messagem.sucesso', "Serie: {$serie->nome} adicionada com sucesso");
        // Serie::create($request->except(['_token']));
        return to_route('series.index')
            ->with('messagem.sucesso', "Serie: {$serie->nome} adicionada com sucesso");
    }

    public function destroy(Series $series, Request $request) {
        $series->delete();
        //$request->session()->flash('messagem.sucesso', "Serie: {$series->nome} removida com sucesso");
        return to_route('series.index')
            ->with('messagem.sucesso', "Serie: {$series->nome} removida com sucesso");
    }

    public function edit(Series $series) {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request) {
        $series->nome = $request->nome;
        $series->save();

        return to_route('series.index')
            ->with('messagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }

}
