@extends('layout')

@section('cabecalho')
    Adicionar Estabelecimento
@endsection

@section('conteudo')
    <form method="post" action="/series">
        @csrf
        <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
            <option value="Netflix">Netflix</option>
            <option value="AmazonPrime">Amazon Prime</option>
            <option value="Disney+">Disney+</option>
            <option value="GloboPlay">Globo Play</option>
            <option value="HBO">HBO</option>
            <option value="Crunchyroll">Crunchyroll</option>
            <option value="Outro">Outra Plataforma</option>
        </select>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection