<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('categories/home', compact('categories'));
    }


    public function create()
    {
        return view('categories/create');
    }


    public function store(Request $request)
    {
        $category = Category::create([
            'name'          => $request->name,
            'description'   => $request->description,
        ]);
        return redirect()->route('categories.index')->with('message','Agregado');
    }


    public function show($id)
    {
        $category = Category::find($id);
        return view('categories/show', compact('category'));
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories/edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name         = $request->name;
        $category->description  = $request->description;
        $category->save();
        return redirect()->route('categories.index')->with('message','Actualizado');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('message','Eliminado');
    }

}
