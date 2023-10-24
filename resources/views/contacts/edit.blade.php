@extends('layout.template')

@section('titlePage', 'Actualizar contacto')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Actualizar contacto</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                
                @csrf
                @method('PUT')

                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" required value="{{ $contact->name }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Apellido paterno:
                    <input type="text" name="paternal" class="form-control" required value="{{ $contact->paternal }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Apellido materno:
                    <input type="text" name="maternal" class="form-control" required value="{{ $contact->maternal }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Teléfono:
                    <input type="tel" name="telephone" class="form-control" required value="{{ $contact->telephone }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    E-mail:
                    <input type="email" name="email" class="form-control" required value="{{ $contact->email }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Categoría
                    <select name="category" class="form-select" required>
                        <option value="">---</option>
                        @foreach ($categories as $category)
                            @if ($contact->category == $category->id)
                                <option value="{{ $category->id }}" selected >{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}" >{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    </label>
                </div>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Actualizar</button>
            </form>
        </div>
    </div>
    
</article>

@endsection