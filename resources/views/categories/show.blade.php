@extends('layout.template')

@section('titlePage', 'Eliminar categoría')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Eliminar categoría</h3>
    <div class="card">
        <div class="card-body">

            <div class="alert alert-danger" role="alert">Confirmar eliminación</div>

            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                
                @csrf
                @method('DELETE')
            
                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" disabled value="{{ $category->name }}">
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Descripción:
                    <input type="text" name="description" class="form-control" disabled value="{{ $category->description }}">
                    </label>
                </div>

                <a href="{{ route('categories.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Eliminar</button>

            </form>
        </div>
    </div>
    
</article>

@endsection