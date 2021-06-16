@extends('layouts.layout')

@section('content')
<h1>Stand de Carros</h1>
<div class="detalhes">
<p class="message">{{session('mssg')}}</p>
    <form action="/produtos" method="post">
        @csrf
        <label for="name">Nomes do Produtos</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="name">Descrição do Produto</label>
        <input type="text" id="desc" name="desc">
        <br>
        <label for="name">Imagem:</label>
        <input type="text" id="url" name="url">
        <br>
        <label for="name">Preço:</label>
        <input type="text" id="price" name="price">
        <br>
        <input type="submit" value="Criar Produto">
    </form>
    <a href="/produtos">Voltar aos produtos</a>
    </div>
    
@endsection