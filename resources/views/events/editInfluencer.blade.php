@extends('layouts.main')

@section('title', 'Influencer: '.$influencer->nome)

@section('content')

<h1 class="titulo-pag">Atualizar Influencers </h1>

<form action="/influencers/editar/{{ $influencer->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="col-md-4">
    <label for="inputNome" class="form-label">Nome: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="nome" class="form-control" id="inputNome" value="{{ $influencer->nome}}" required>
  </div>
  <div class="col-md-4">
    <label for="inputlinkInstagram" class="form-label">Instagram: <em style="color:red;">*</em></label>
    <input type="text" name="linkInstagram" class="form-control" id="inputlinkInstagram" value="{{ $influencer->linkInstagram}}" required>
  </div>
  <div class="col-md-4">
    <label for="inputlinkTwitter" class="form-label">Twitter: <em style="color:red;">*</em></label>
    <input type="text" name="linkTwitter" class="form-control" id="inputlinkTwitter" value="{{ $influencer->linkTwitter}}" required>
  </div>
  <div class="col-md-4">
    <label for="inputlinkYoutube" class="form-label">Youtube: <em style="color:red;">*</em></label>
    <input type="text" name="linkYoutube" class="form-control" id="inputlinkYoutube" value="{{ $influencer->linkYoutube}}" required>
  </div>
  <div class="col-md-4">
    <label for="inputlinkSite" class="form-label">Site/blog: <em style="color:red;">*</em></label>
    <input type="text" name="linkSite" class="form-control" id="inputlinkSite" value="{{ $influencer->linkSite}}" required>
  </div>
  <div class="col-md-4">
    <label for="inputImagem" class="form-label">Imagem:*</label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" >
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição:*</label>
    <input type="text" name="descricao" class="form-control" id="inputDescricao"value="{{ $influencer->descricao}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection