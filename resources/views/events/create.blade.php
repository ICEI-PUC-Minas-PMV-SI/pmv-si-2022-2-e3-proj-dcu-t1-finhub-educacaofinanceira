@extends('layouts.main')

@section('title', 'Livros')

@section('content')

<h1>Cadastrar Livros </h1>

<form action="/livros/cadastrar" method="post"class="row g-3">
    @csrf
  <div class="col-md-6">
    <label for="inputTitulo" class="form-label">Titulo: <abbr title="Campo Obrigatório">*</abbr></label>
    <input type="text" name="titulo" class="form-control" id="inputTitulo" placeholder="Titulo do Livro">
  </div>
  <div class="col-md-5">
    <label for="inputAutor" class="form-label">Autor(a):*</label>
    <input type="text" name="autor" class="form-control" id="inputAutor" placeholder="Autor do Livro">
  </div>
  <div class="col-md-1">
    <label for="inputEdicao" class="form-label">Edição:*</label>
    <input type="text" name="edicao" class="form-control" id="inputAEdicao" placeholder="">
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" class="form-control" id="inputAno" placeholder="2010">
  </div>
  <div class="col-2">
    <label for="inputPaginas" class="form-label">N° Páginas:*</label>
    <input type="text" name="paginas" class="form-control" id="inputPaginas" placeholder="630">
  </div>
  <div class="col-md-3">
    <label for="inputCIdioma" class="form-label">Idioma:*</label>
    <input type="text" name="idioma" class="form-control" id="inputIdioma" placeholder="Português">
  </div>
  <div class="col-md-3">
    <label for="inputEditora" class="form-label">Editora:*</label>
    <input type="text" name="editora" class="form-control" id="inputEditora" placeholder="Editora">
  </div>
  <div class="col-md-2">
    <label for="inputDataPubli" class="form-label">Data Publicação:*</label>
    <input type="text" name="dataPublicacao" class="form-control" id="inputDataPubli"placeholder="25/09/2010">
  </div>
  <div class="col-md-6">
    <label for="inputImagem" class="form-label">Imagem:*</label>
    <input type="text" name="image" class="form-control" id="inputImage" placeholder="Foto da capa">
  </div>
  <div class="col-md-5">
    <label for="inputLink" class="form-label">Link:*</label>
    <input type="text" name="linkCompra" class="form-control" id="inputLink" placeholder="Link de compra">
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição:*</label>
    <input type="text" name="descricao" class="form-control" id="inputDescricao"placeholder="">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection