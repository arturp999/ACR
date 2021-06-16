@extends('layouts.layout')

@section('content')
<h1>Os Carros Disponiveiss</h1>
@foreach($carros as $carro)
<div class="carro">
    <a href="/carros/{{$carro['id']}}">
        <img src="{{$carro['img']}}" alt="img/carro">
        <h2>{{$carro['nome']}}</h2>
    </a>
</div>
@endforeach
@endsection