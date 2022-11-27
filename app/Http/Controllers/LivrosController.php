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
        return view('events.showAll', ['livros' => $livros]);
        
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
        $livro->image =          $request->image;
        $livro->linkCompra =     $request->linkCompra;
        $livro->descricao =      $request->descricao;

        if($request->hasFile('image') && $request->image->isValid())
        {
            $imageName = time().'.'.$request->image->extension();
            $livro->image = $imageName;
            $request->image->move(public_path('images'), $imageName);

        }

        $livro->save();
        return redirect('/livros')->with('msg', 'Livro cadastrado com sucesso!'); // colocar falsh messagem na página de criar
    }

    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return view('events.show', ['livro' => $livro]);
    }

    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('events.edit', ['livro' => $livro]);
    }

    public function update(Request $request)
    {
        Livro::findOrFail($request->id)->update($request->all());

        return redirect('/livros');
    }

    // public function delete($id)
    // {
    //     $livro = Livro::findOrFail($id);
    //     return view('events.edit', ['livro' => $livro]); // ajustar
    // }

    public function destroy($id)
    {
        Livro::findOrFail($id)->delete();
        return redirect('/livros');
    }
}
