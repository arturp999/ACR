@extends('layouts.layout')

@section('content')
<h1>Os Carros Disponiveiss</h1>
@foreach($produtos as $produto)
<div class="produto">
    <a href="/produtos/{{$produto ->id}}">
        <img src="{{$produto ->url}}" alt="img/carro">
        <h2>{{$produto ->nome}}</h2>
    </a>
</div>
@endforeach
@endsection