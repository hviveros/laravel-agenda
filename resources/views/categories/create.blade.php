@extends('layout.template')

@section('titlePage', 'Agregar categoría')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Agregar categoría</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="post">
                
                @csrf
                @method('POST')

                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Descripción:
                    <input type="text" name="description" class="form-control" required>
                    </label>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Guardar</button>
            </form>
        </div>
    </div>
    
</article>

@endsection