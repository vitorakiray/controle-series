@extends('layout')

@section('cabecalho')
    Episódios de {{$serieNome}}
@endsection

@section('conteudo')
    <a href="/series/{{$serieId}}/episodios/create" class="btn btn-dark mb-2">Criar Novo</a>
        <ul class="list-group">
            @foreach($episodios as $episodio)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item list-group-item-primary">{{ $episodio->id }}</li>
                            <li class="list-group-item list-group-item-info">{{ $episodio->data }}</li>
                            <li class="list-group-item list-group-item-primary">{{ $episodio->descricao }}</li>
                            <li class="list-group-item list-group-item-warning">{{ $episodio->avaliacao }}</li>
                            <li class="list-group-item list-group-item-secondary">{{ $episodio->comentario }}</li>
                        </ul>
                    </div>
                    <span class="d-flex align-items-center">
                        <form method="post" action="/series/{{$serieId}}/episodios/{{$episodio->id}}"
                        onsubmit="return confirm('Tem certeza que deseja remover o episodio?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm btn-sm mr-2 mt-3">Excluir</button>
                        </form>
                        <a href="/series/{{$serieId}}/episodios/{{$episodio->id}}/edit" 
                         class="btn btn-warning btn-sm mr-2">Editar</a>
                    </span>
                </li>
            @endforeach
        </ul>
@endsection