@extends('layouts.main')

@section('title', 'Cursos')

@section('content')

<br>
<h1 class="titulo-pag">Cadastrar Cursos </h1>
<br>
<form action="/cursos/cadastrar" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="nome" class="form-control" id="inputNome" required>
  </div>
  <div class="col-md-6">
    <label for="inputlinkCurso" class="form-label">URL: <em style="color:red;">*</em></label>
    <input type="text" name="linkCurso" class="form-control" id="inputlinkCurso" required>
  </div>
  <div class="col-md-6">
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