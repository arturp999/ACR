@extends('layouts.layout')

@section('content')
    <h1>Loja de informatica</h1>
    <div class="detalhes">
        @if (isset($produto))
            <img src="{{$produto->url}}" alt="produto/img">
            <h2>{{$produto->nome}}</h2>     
            <p>{{$produto->desc}}<br/>
                €</p>
                <h3>{{$produto->desc}}</h3>
        @else
            <h1>Produto não existe</h1>
        @endif
            <form action="/produtos/{{$produto->id}}" method="post">
                @csrf
                @method('DELETE')
                <button>   Delete </button>    
            </form>
    <a href="/produtos">Voltar aos produtos</a>
</div>
@endsection