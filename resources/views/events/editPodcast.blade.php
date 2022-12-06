@extends('layouts.main')

@section('title', 'Podcasts: '.$podcast->nome)

@section('content')

<h1 class="titulo-pag">Atualizar Podcast </h1>

<form action="/podcasts/editar/{{ $podcast->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="nome" class="form-control" id="inputNome" value="{{ $podcast->nome}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputlinkPodcast" class="form-label">URL: <em style="color:red;">*</em></label>
    <input type="text" name="linkPodcast" class="form-control" id="inputlinkCurso" value="{{ $podcast->linkPodcast}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputImagem" class="form-label">Imagem:*</label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" >
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição:*</label>
    <input type="text" name="descricao" class="form-control" id="inputDescricao"value="{{ $podcast->descricao}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection