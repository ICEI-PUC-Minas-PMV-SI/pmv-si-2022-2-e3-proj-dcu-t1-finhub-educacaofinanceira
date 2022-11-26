@extends('layouts.main')

@section('title', 'Livros')

@section('content')

<h1>Livros </h1>

<a class="btn btn-outline-secondary" href="/livros/novo">Adicionar Livros</a>

<div class="row row-cols-1 row-cols-md-3 g-3">
  <div class="col">
    <div class="card">
      <img src="\images\livro_pai_rico_pai_pobre.jpg" class="card-img-top" alt="Pai Rico Pai Pobre">
      <div class="card-body">
        <h5 class="card-title">Pai Rico Pai Pobre</h5>
        <p class="card-text">A escola prepara as crianças para o mundo real? Essa é a primeira pergunta</p>
        <a class="btn btn-outline-secondary" href="">Saiba Mais</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="\images\livro_mil_ao_milhao.jpg" class="card-img-top" alt="Do Mil ao Milhão">
      <div class="card-body">
        <h5 class="card-title">Do Mil ao Milhão</h5>
        <p class="card-text">Em seu primeiro livro, Thiago Nigro, criador da plataforma O Primo Rico...</p>
        <a class="btn btn-outline-secondary" href="">Saiba Mais</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="\images\livro_me_poupe.jpg" class="card-img-top" alt="Me Poupe">
      <div class="card-body">
        <h5 class="card-title">Me Poupe</h5>
        <p class="card-text">Como economizar no dia a dia? Como poupar mesmo ganhando pouco?</p>
        <a class="btn btn-outline-secondary" href="">Saiba Mais</a>
      </div>
    </div>
  </div>
</div>
@endsection