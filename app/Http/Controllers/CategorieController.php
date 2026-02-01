<?php

namespace App\Http\Controllers;

use App\Models\Categorie as ModelsCategorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Categorie;
class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('categories.index',compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $valedated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Categorie::create($valedated);
        return redirect('categories/index');
    }

    // public function edit($categorie){
    //     return view('categories.update',compact('categorie'));
    // }

    public function update(Request $request, Categorie $categorie){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);
        $categorie->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('categorries.index',$categorie->id);
    }
}
