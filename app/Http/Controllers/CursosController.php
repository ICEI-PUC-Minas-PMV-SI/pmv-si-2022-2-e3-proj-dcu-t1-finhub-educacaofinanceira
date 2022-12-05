<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use Termwind\Components\Li;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all();
        return view('events.showAllCursos', ['cursos' => $cursos]);
        
    }
    public function create()
    {
        return view('events.createCursos');
    }

    public function store(Request $request)
    {
        $curso = new Cursos;

        $curso->nome =           $request->nome;
        $curso->linkCurso =      $request->linkCurso;
        $curso->image =          $request->image;
        $curso->descricao =      $request->descricao;

        if($request->hasFile('image') && $request->image->isValid())
        {
            $imageName = time().'.'.$request->image->extension();
            $curso->image = $imageName;
            $request->image->move(public_path('images'), $imageName);

        }

        $curso->save();
        return redirect('/cursos')->with('msg', 'Curso cadastrado com sucesso!'); // colocar falsh messagem na página de criar
    }

    public function show($id)
    {
        $curso = Cursos::findOrFail($id);
        return view('events.showCurso', ['curso' => $curso]);
    }

    public function edit($id)
    {
        $curso = Cursos::findOrFail($id);
        return view('events.editCurso', ['curso' => $curso]);
    }

    public function update(Request $request)
    {
        Cursos::findOrFail($request->id)->update($request->all());

        return redirect('/cursos');
    }

    // public function delete($id)
    // {
    //     $livro = Livro::findOrFail($id);
    //     return view('events.edit', ['livro' => $livro]); // ajustar
    // }

    public function destroy($id)
    {
        Cursos::findOrFail($id)->delete();
        return redirect('/cursos');
    }
}
