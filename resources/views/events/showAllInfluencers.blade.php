@extends('layouts.main')

@section('title', 'Influencers')

@section('content')

<h1>Influencers</h1>

<a class="btn btn-outline-secondary btn-action" href="/influencers/cadastrar">Adicionar Influencers</a>
<br>
<br>
<br>
<div class="row row-cols-1 row-cols-md-3 g-3">
  @foreach($influencers as $influencer)
  <div class="col">
    <div class="card">
      <img src="/images/{{ $influencer -> image }}" class="card-img-top" alt="{{ $influencer -> nome }}">
      <div class="card-body">
        <h5 class="card-title">{{ $influencer -> nome }}</h5>
        <p class="card-text">{{ $influencer -> descricao }}</p>
        <a class="btn btn-outline-secondary d-flex justify-content-center" href="/influencers/{{ $influencer -> id }}">Saiba Mais</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection