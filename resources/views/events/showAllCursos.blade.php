@extends('layouts.main')

@section('title', 'Cursos')

@section('content')

<h1>Cursos</h1>

<a class="btn btn-outline-secondary btn-action" href="/cursos/cadastrar">Adicionar Cursos</a>
<br>
<br>
<br>
<div class="row row-cols-1 row-cols-md-3 g-3">
  @foreach($cursos as $curso)
  <div class="col">
    <div class="card">
      <img src="/images/{{ $curso -> image }}" class="card-img-top" alt="{{ $curso -> nome }}">
      <div class="card-body">
        <h5 class="card-title">{{ $curso -> nome }}</h5>
        <p class="card-text">{{ $curso -> descricao }}</p>
        <a class="btn btn-outline-secondary" href="/cursos/{{ $curso -> id }}">Saiba Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection