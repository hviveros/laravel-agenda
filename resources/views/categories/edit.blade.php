@extends('layout.template')

@section('titlePage', 'Actualizar categoría')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Actualizar categoría</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                
                @csrf
                @method('PUT')

                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" required value="{{ $category->name }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Descripción:
                    <input type="text" name="description" class="form-control" required value="{{ $category->description }}">
                    </label>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Actualizar</button>

            </form>
        </div>
    </div>
    
</article>

@endsection