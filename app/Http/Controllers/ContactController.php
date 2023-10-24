<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Llamamos a este modelo ya que es el que trae el nombre de la categoría
        $contacts = ContactCategory::get();
        return view('contacts/home', compact('contacts'));
    }


    public function create()
    {
        // Agregar todas las categorías
        // Llama el modelo Category
        // all() llamará todos los registros, pero yo sólo quiero el id el nombre
        $categories = Category::all(['id', 'name']);
        return view('contacts/create', compact('categories'));
    }


    public function store(Request $request)
    {
        $contact = Contact::create([
            'name'      => $request->name,
            'paternal'  => $request->paternal,
            'maternal'  => $request->maternal,
            'telephone' => $request->telephone,
            'email'     => $request->email,
            'category'  => $request->category
        ]);
        return redirect()->route('contacts.index')->with('message','Agregado');
    }


    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts/show', compact('contact'));
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        $categories = Category::all(['id', 'name']);
        return view('contacts/edit', compact('contact', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name      = $request->name;
        $contact->paternal  = $request->paternal;
        $contact->maternal  = $request->maternal;
        $contact->telephone = $request->telephone;
        $contact->email     = $request->email;
        $contact->category  = $request->category;
        $contact->save();
        return redirect()->route('contacts.index')->with('message','Actualizado');
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('message','Eliminado');
    }
}
