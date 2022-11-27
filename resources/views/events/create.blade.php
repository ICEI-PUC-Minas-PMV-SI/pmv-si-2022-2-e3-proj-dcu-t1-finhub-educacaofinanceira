@extends('layouts.main')

@section('title', 'Livros')

@section('content')

<h1>Cadastrar Livros </h1>

<form action="/livros/cadastrar" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
  <div class="col-md-6">
    <label for="inputTitulo" class="form-label">Titulo: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="titulo" class="form-control" id="inputTitulo" placeholder="Titulo do Livro" required>
  </div>
  <div class="col-md-5">
    <label for="inputAutor" class="form-label">Autor(a): <em style="color:red;">*</em></label>
    <input type="text" name="autor" class="form-control" id="inputAutor" placeholder="Autor do Livro" required>
  </div>
  <div class="col-md-1">
    <label for="inputEdicao" class="form-label">Edição: <em style="color:red;">*</em></label>
    <input type="number" name="edicao" class="form-control" id="inputAEdicao" placeholder="" required>
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano: <em style="color:red;">*</em></label>
    <input type="number" name="ano" class="form-control" id="inputAno" placeholder="2010" required>
  </div>
  <div class="col-2">
    <label for="inputPaginas" class="form-label">N° Páginas: <em style="color:red;">*</em></label>
    <input type="number" name="paginas" class="form-control" id="inputPaginas" placeholder="630" required>
  </div>
  <div class="col-md-3">
    <label for="inputCIdioma" class="form-label">Idioma: <em style="color:red;">*</em></label>
    <input type="text" name="idioma" class="form-control" id="inputIdioma" placeholder="Português" required>
  </div>
  <div class="col-md-3">
    <label for="inputEditora" class="form-label">Editora: <em style="color:red;">*</em></label>
    <input type="text" name="editora" class="form-control" id="inputEditora" placeholder="Editora" required>
  </div>
  <div class="col-md-6">
    <label for="inputImagem" class="form-label">Imagem: <em style="color:red;">*</em></label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" placeholder="Foto da capa"required>
  </div>
  <div class="col-md-6">
    <label for="inputLink" class="form-label">Link: <em style="color:red;">*</em></label>
    <input type="text" name="linkCompra" class="form-control" id="inputLink" placeholder="Link de compra" required>
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição: <em style="color:red;">*</em></label>
    <input type="text" name="descricao" class="form-control" id="inputDescricao"placeholder="" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection