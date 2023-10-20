@extends('layout.template')

@section('titlePage', 'Agregar contacto')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Agregar contacto</h3>
    <div class="card">
        <div class="card-body">
            <form action="#" method="post">
                <!-- @csrf -->
                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Apellido paterno:
                    <input type="text" name="paternal" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Apellido materno:
                    <input type="text" name="maternal" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Teléfono:
                    <input type="tel" name="telephone" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    E-mail:
                    <input type="email" name="email" class="form-control" required>
                    </label>
                </div>
                <div class="mb-3">    
                    <label class="form-label">
                    Categoría
                    <select name="category" class="form-select" required>
                        <option value="">---</option>
                    </select>
                    </label>
                </div>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Guardar</button>
            </form>
        </div>
    </div>
    
</article>

@endsection