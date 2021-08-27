@extends('layout')

@section('cabecalho')
    Atualizar Série
@endsection

@section('conteudo')
    <form method="post" action="/series/{{$serie->id}}">
        @csrf
        @method('PUT')
        <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$serie->nome}}">
        <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
        <select id="plataforma" name="plataforma">
        <option value="Netflix" {{$serie->plataforma == 'Netflix' ? 'selected' : ''}}>
        Netflix</option>
        <option value="AmazonPrime" {{$serie->plataforma == 'AmazonPrime' ? 'selected' : ''}}>
        Amazon Prime</option>
        <option value="Disney+" {{$serie->plataforma == 'Disney+' ? 'selected' : ''}}>
        Disney+</option>
        <option value="GloboPlay" {{$serie->plataforma == 'GloboPlay' ? 'selected' : ''}}>
        Globo Play</option>
        <option value="HBO" {{$serie->plataforma == 'HBO' ? 'selected' : ''}}>
        HBO</option>
        <option value="Crunchyroll" {{$serie->plataforma == 'Crunchyroll' ? 'selected' : ''}}>
        Crunchyroll</option>
        <option value="Outro" {{$serie->plataforma == 'Outro' ? 'selected' : ''}}>
        Outra Plataforma</option>
        </select>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection