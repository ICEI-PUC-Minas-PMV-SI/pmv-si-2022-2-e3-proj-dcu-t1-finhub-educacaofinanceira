@extends('layouts.main')

@section('title', 'Livro: '.$livro->titulo)

@section('content')

<h1>Atualizar Livros </h1>

<form action="/livros/editar/{{ $livro->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="col-md-6">
    <label for="inputTitulo" class="form-label">Titulo: <abbr title="Campo Obrigatório">*</abbr></label>
    <input type="text" name="titulo" class="form-control" id="inputTitulo" value="{{ $livro->titulo}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputAutor" class="form-label">Autor(a):*</label>
    <input type="text" name="autor" class="form-control" id="inputAutor" value="{{ $livro->autor}}" required>
  </div>
  <div class="col-md-2">
    <label for="inputEdicao" class="form-label">Edição:*</label>
    <input type="number" name="edicao" class="form-control" id="inputAEdicao" value="{{ $livro->edicao}}" required>
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="number" name="ano" class="form-control" id="inputAno" value="{{ $livro->ano}}" required>
  </div>
  <div class="col-2">
    <label for="inputPaginas" class="form-label">N° Páginas:*</label>
    <input type="number" name="paginas" class="form-control" id="inputPaginas" value="{{ $livro->paginas}}" required>
  </div>
  <div class="col-md-3">
    <label for="inputCIdioma" class="form-label">Idioma:*</label>
    <input type="text" name="idioma" class="form-control" id="inputIdioma" value="{{ $livro->idioma}}" required>
  </div>
  <div class="col-md-3">
    <label for="inputEditora" class="form-label">Editora:*</label>
    <input type="text" name="editora" class="form-control" id="inputEditora" value="{{ $livro->editora}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputImagem" class="form-label">Imagem:*</label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" >
  </div>
  <div class="col-md-6">
    <label for="inputLink" class="form-label">Link:*</label>
    <input type="text" name="linkCompra" class="form-control" id="inputLink" value="{{ $livro->linkCompra}}" required>
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição:*</label>
    <input type="text" name="descricao" class="form-control" id="inputDescricao"value="{{ $livro->descricao}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection