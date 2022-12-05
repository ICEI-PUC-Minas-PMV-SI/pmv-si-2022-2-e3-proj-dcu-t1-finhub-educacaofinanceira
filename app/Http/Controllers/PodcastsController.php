<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcasts;
use Termwind\Components\Li;

class PodcastsController extends Controller
{
    public function index()
    {
        $podcasts = Podcasts::all();
        return view('events.showAllPodcasts', ['podcasts' => $podcasts]);
        
    }
    public function create()
    {
        return view('events.createPodcasts');
    }

    public function store(Request $request)
    {
        $podcast = new Podcasts;

        $podcast->nome =           $request->nome;
        $podcast->linkPodcast =    $request->linkPodcast;
        $podcast->image =          $request->image;
        $podcast->descricao =      $request->descricao;

        if($request->hasFile('image') && $request->image->isValid())
        {
            $imageName = time().'.'.$request->image->extension();
            $podcast->image = $imageName;
            $request->image->move(public_path('images'), $imageName);

        }

        $livro->save();
        return redirect('/podcasts')->with('msg', 'Podcast cadastrado com sucesso!'); // colocar falsh messagem na página de criar
    }

    public function show($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('events.showPodcast', ['podcast' => $podcast]);
    }

    public function edit($id)
    {
        $podcast = Podcasts::findOrFail($id);
        return view('events.editPodcast', ['podcast' => $podcast]);
    }

    public function update(Request $request)
    {
        Podcast::findOrFail($request->id)->update($request->all());

        return redirect('/podcasts');
    }

    // public function delete($id)
    // {
    //     $livro = Livro::findOrFail($id);
    //     return view('events.edit', ['livro' => $livro]); // ajustar
    // }

    public function destroy($id)
    {
        Podcasts::findOrFail($id)->delete();
        return redirect('/podcasts');
    }
}
