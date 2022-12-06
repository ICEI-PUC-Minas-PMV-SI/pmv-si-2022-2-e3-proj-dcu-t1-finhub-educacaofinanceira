<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Influencers;
use Termwind\Components\Li;

class InfluencersController extends Controller
{
    public function index()
    {
        $influencers = Influencers::all();
        return view('events.showAllInfluencers', ['influencers' => $influencers]);
        
    }
    public function create()
    {
        return view('events.createInfluencers');
    }

    public function store(Request $request)
    {
        $influencer = new Influencers;

        $influencer->nome =                $request->nome;
        $influencer->linkInstagram =       $request->linkInstagram;
        $influencer->linkTwitter =         $request->linkTwitter;
        $influencer->linkYoutube =         $request->linkYoutube;
        $influencer->linkSite =            $request->linkSite;
        $influencer->image =               $request->image;
        $influencer->descricao =           $request->descricao;

        if($request->hasFile('image') && $request->image->isValid())
        {
            $imageName = time().'.'.$request->image->extension();
            $influencer->image = $imageName;
            $request->image->move(public_path('images'), $imageName);

        }

        $influencer->save();
        return redirect('/influencers')->with('msg', 'Influencer cadastrado com sucesso!'); // colocar falsh messagem na página de criar
    }

    public function show($id)
    {
        $influencer = Influencers::findOrFail($id);
        return view('events.showInfluencer', ['influencer' => $influencer]);
    }

    public function edit($id)
    {
        $influencer = Influencers::findOrFail($id);
        return view('events.editInfluencer', ['influencer' => $influencer]);
    }

    public function update(Request $request)
    {
        Influencers::findOrFail($request->id)->update($request->all());

        return redirect('/influencers');
    }

    // public function delete($id)
    // {
    //     $livro = Livro::findOrFail($id);
    //     return view('events.edit', ['livro' => $livro]); // ajustar
    // }

    public function destroy($id)
    {
        Influencers::findOrFail($id)->delete();
        return redirect('/influencers');
    }
}
