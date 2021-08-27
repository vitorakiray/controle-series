<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
    public function index() {
        $data = Serie::all();
        return view('series.listar', [
            'data' => $data
        ]);
    }

    public function create() {
        return view('series.adicionar');
    }

    public function store(Request $request) {
        Serie::create($request->all());
        return redirect()->route('listar_series');
    }

    public function edit($id) {
        $serie = Serie::find($id);
        return view('series.editar', [
            'serie' => $serie
        ]);
    }

    public function update(Request $request, $id){
        $serie = Serie::find($id);
        $serie->nome = $request->nome;
        $serie->plataforma = $request->plataforma;
        $serie->save();
        return redirect()->route('listar_series');
    }

    public function destroy($id) {
        $serie = Serie::find($id);
        $serie->delete();
        return redirect()->route('listar_series');
    }
        

}
