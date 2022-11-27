@extends('layouts.main')

@section('title', 'Livros')

@section('content')

<h1>Livros </h1>

<a class="btn btn-outline-secondary btn-action" href="/livros/cadastrar">Adicionar Livros</a>
<br>
<br>
<br>
<div class="row row-cols-1 row-cols-md-3 g-3">
  @foreach($livros as $livro)
  <div class="col">
    <div class="card">
      <img src="/images/{{ $livro -> image }}" class="card-img-top" alt="{{ $livro -> titulo }}">
      <div class="card-body">
        <h5 class="card-title">{{ $livro -> titulo }}</h5>
        <p class="card-text">{{ $livro -> descricao }}</p>
        <a class="btn btn-outline-secondary" href="/livros/{{ $livro -> id }}">Saiba Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection