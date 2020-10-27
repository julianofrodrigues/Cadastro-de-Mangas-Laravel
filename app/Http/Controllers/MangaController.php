<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Manga;


class MangaController extends Controller
{
    public function index() {
        $collection = Manga::all();
        return view('index',[
            'mangas'=>$collection
        ]);
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        $manga = new Manga;
        $manga->name = $request->name;
        $manga->description = $request->description;
        
        if($request->hasFile('image')&& $request->file('image')->isValid()){
            if($manga->image)
            $name = $manga->image;
            else
              $name = uniqid(date('HisYmd'));
              $extension = $request->image->extension();
              $nameFile = "{$name}.{$extension}"; 
              $manga->image = $nameFile; 
              $upload = $request->image->storeAs('public/capas', $nameFile);
             
              if(!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer upload da imagem')->withInput();;
        }
        // dd($manga);
        $manga->save();
        return redirect()->route('index')->with('message', 'Manga cadastrado com sucesso!');
    }
    public function edit($id) {
        $manga = Manga::findOrFail($id);
        return view('edit', [
            'manga'=>$manga
        ]);
    }

    public function update(Request $request, $id) {
        $manga = Manga::findOrFail($id); 
        $manga->name = $request->name;
        $manga->description = $request->description;
        // $manga->image = $request->image;
       
        $manga->save();
        return redirect()->route('index')->with('message', 'Manga alterado com sucesso!');
    }

    public function destroy($id) {
        $manga = Manga::findOrFail($id);
        $manga->delete();
        return redirect()->route('index')->with('message', 'Manga excluído com sucesso!');
    }

}
