@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    <a href="/series/create" class="btn btn-dark mb-2">Adicionar Nova Série</a>
    <ul class="list-group">
        @foreach($data as $serie)
        <li class="list-group-item d-flex justify-content-between">
            <div>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item list-group-item-info">{{ $serie->nome }}</li>
                    <li class="list-group-item list-group-item-secondary">{{ $serie->plataforma }}</li>
                </ul>
            </div>
            <span class="d-flex align-items-center">
                <form method="post" action="/series/{{$serie->id}}"
                    onsubmit="return confirm('Tem certeza que deseja remover {{ $serie->nome }}?')">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger btn-sm mr-2 mt-3">Excluir</button>
                </form>
                <a href="/series/{{$serie->id}}/edit" class="btn btn-warning btn-sm mr-2">Editar</a>
                <a href="/series/{{$serie->id}}/episodios" class="btn btn-primary btn-sm">Ver Episódios</a>
            </span>
        </li>
        @endforeach
    </ul>
@endsection
