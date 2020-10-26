<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $manga->image = $request->image;
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
        $manga->image = $request->image;
        $manga->save();
        return redirect()->route('index')->with('message', 'Manga alterado com sucesso!');
    }

    public function destroy($id) {
        $manga = Manga::findOrFail($id);
        $manga->delete();
        return redirect()->route('index')->with('message', 'Manga excluído com sucesso!');
    }

}
