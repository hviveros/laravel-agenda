<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('contacts/home', compact('contacts'));
    }


    public function create()
    {
        return view('contacts/create');
    }


    public function store(Request $request)
    {
        $contact = Contact::create([
            'name'          => $request->name,
            'description'   => $request->description,
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
        return view('contacts/edit', compact('contact'));
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name         = $request->name;
        $contact->description  = $request->description;
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
