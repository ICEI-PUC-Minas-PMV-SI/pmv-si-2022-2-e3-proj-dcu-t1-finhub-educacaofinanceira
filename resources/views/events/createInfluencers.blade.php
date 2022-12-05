@extends('layouts.main')

@section('title', 'Influencers')

@section('content')
<br>
<h1 class="titulo-pag">Cadastrar Influencer </h1>
<br>

<form action="/influencers/cadastrar" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
  <div class="col-md-4">
    <label for="inputNome" class="form-label">Nome: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="nome" class="form-control" id="inputNome" required>
  </div>
  <div class="col-md-4">
    <label for="inputLinkInstagram" class="form-label">Instagram: <em style="color:red;">*</em></label>
    <input type="text" name="linkInstagram" class="form-control" id="inputLinkInstagram" required>
  </div>
  <div class="col-md-4">
    <label for="inputTwitter" class="form-label">Twitter: <em style="color:red;">*</em></label>
    <input type="text" name="linkTwitter" class="form-control" id="inputATwitter" required>
  </div>
  <div class="col-md-4">
    <label for="inputYoutube" class="form-label">Youtube: <em style="color:red;">*</em></label>
    <input type="text" name="linkYoutube" class="form-control" id="inputYoutube" required>
  </div>
  <div class="col-4">
    <label for="inputSite" class="form-label">Site/blog: <em style="color:red;">*</em></label>
    <input type="text" name="linkSite" class="form-control" id="inputSite" required>
  </div>
  <div class="col-md-4">
    <label for="inputImagem" class="form-label">Imagem: <em style="color:red;">*</em></label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" required>
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição: <em style="color:red;">*</em></label>
    <input type="text-area" name="descricao" class="form-control" id="inputDescricao" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection