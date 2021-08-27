<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;
use App\Episodio;

class EpisodioController extends Controller {
    public function index(Request $request, $serieId) {
        $episodios = Episodio::query()
            ->where('serie_id', $serieId)
            ->orderByDesc('data')
            ->get();
        $serie = Serie::find($serieId);
        return view('episodios.listar', [
            'episodios' => $episodios,
            'serieNome' => $serie->nome,
            'serieId' => $serieId
        ]);
    }
   
    public function create(Request $request, $serieId) {
        return view('episodios.adicionar', [
            'serieId' => $serieId
        ]);
    }
    
    public function store(Request $request, $serieId) {
        $episodio = new Episodio($request->all());
        $serie = Serie::find($serieId);
        $serie->episodios()->save($episodio);
        return redirect()->route('listar_episodios', [
            'serieId' => $serieId
        ]);
    }

    public function destroy(Request $request, $serieId, $id) {
        $episodio = Episodio::find($id);
        $episodio->delete();
        return redirect()->route('listar_episodios', [
            'serieId' => $serieId
        ]);
    }

    public function edit(Request $request, $serieId, $id) {
        $episodio = Episodio::find($id);
        return view('episodios.editar', [
            'episodio' => $episodio,
            'serieId' => $serieId
        ]);
    }

    public function update(Request $request, $serieId, $id) {
        $episodio = Episodio::find($id);
        $episodio->descricao = $request->descricao;
        $episodio->data = $request->data;
        $episodio->avaliacao = $request->avaliacao;
        $episodio->comentario = $request->comentario;
        $episodio->save();
        return redirect()->route('listar_episodios', [
            'serieId' => $serieId
        ]);
    }
}
