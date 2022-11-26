<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Termwind\Components\Li;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('events.showAll', ['livros' => $livros]); // ajustar o nome da view que exibe todos dados
        
    }
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $livro = new Livro;

        $livro->titulo =         $request->titulo;
        $livro->autor =          $request->autor;
        $livro->edicao =         $request->edicao;
        $livro->ano =            $request->ano;
        $livro->paginas =        $request->paginas;
        $livro->idioma =         $request->idioma;
        $livro->editora =        $request->editora;
        $livro->dataPublicacao = $request->dataPublicacao;
        $livro->image =         $request->image;
        $livro->linkCompra =     $request->linkCompra;
        $livro->descricao =      $request->descricao;

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('image/events'), $imageName);

            $livro->image = $imageName;
        }

        $livro->save();
        return redirect('/livros')->with('msg', 'Livro cadastrado com sucesso!'); // colocar falsh messagem na página de criar
    }

    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return view('events.show', ['livro' => $livro]); // ajustar
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('events.edit', ['livro' => $livro]); // ajustar
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);

        $livro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'edicao' => $request->edicao,
            'ano' => $request->ano,
            'n_paginas' => $request->n_paginas,
            'idioma' => $request->idioma,
            'editora' => $request->editora,
            'data_publicacao' => $request->data_publicacao,
            'descricao' => $request->descricao,
            'image' => $request->image,
            'link_compra' => $request->link_compra,
        ]);

        return "Livro Atualizado com sucesso!";
    }

    public function delete($id)
    {
        $livro = Livro::findOrFail($id);
        return view('events.edit', ['livro' => $livro]); // ajustar
    }

    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return view('Livro excluído com sucesso!'); // ajustar
    }
}
