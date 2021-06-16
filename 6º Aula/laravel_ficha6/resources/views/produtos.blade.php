@extends('layouts.layout')

@section('content')

@foreach($produtos as $produto)
<div class="produto">
    <a href="/produtos/{{$produto['id']}}">
        <img src="{{$produto['img']}}" alt="img/produto">
        <h2>{{$produto['nome']}}</h2>
    </a>
</div>
@endforeach
@endsection