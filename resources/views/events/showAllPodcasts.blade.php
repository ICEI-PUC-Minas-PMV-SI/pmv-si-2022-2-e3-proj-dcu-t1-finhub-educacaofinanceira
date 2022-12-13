@extends('layouts.main')

@section('title', 'Podcasts')

@section('content')

<h1>Podcasts </h1>

<a class="btn btn-outline-secondary btn-action" href="/podcasts/cadastrar">Adicionar Podcasts</a>
<br>
<br>
<br>
<div class="row row-cols-1 row-cols-md-3 g-3">
  @foreach($podcasts as $podcast)
  <div class="col">
    <div class="card">
      <img src="/images/{{ $podcast -> image }}" class="card-img-top" alt="{{ $podcast -> nome }}">
      <div class="card-body">
        <h5 class="card-title">{{ $podcast -> nome }}</h5>
        <p class="card-text">{{ $podcast -> descricao }}</p>
        <a class="btn btn-outline-secondary d-flex justify-content-center" href="/podcasts/{{ $podcast -> id }}">Saiba Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection