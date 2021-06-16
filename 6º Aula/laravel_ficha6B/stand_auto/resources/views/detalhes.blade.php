@extends('layouts.layout')

@section('content')
    <h1>Stand de Carros</h1>
    <div class="detalhes">
        @if (isset($carro))
            <img src="{{$carro['img']}}" alt="carro/img">
            <h2>{{$carro['nome']}}</h2>
            <p>{{$carro['nome']}}<br/>
                €{{$carro['preco']}}</p>
                <h3>{{$carro['desc']}}</h3>
        @else
            <h1>Carro não existe</h1>
        @endif
    <a href="/carros">Voltar aos Carros</a>
</div>
@endsection