@extends('layout.template')

@section('titlePage', 'Eliminar contacto')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Eliminar contacto</h3>
    <div class="card">
        <div class="card-body">
            <div class="alert alert-danger" role="alert">Confirmar eliminación</div>
            <form action="#" method="post">
                <!-- @csrf -->
                <div class="mb-3">    
                    <label class="form-label">
                    Nombre:
                    <input type="text" name="name" class="form-control" disabled>
                    </label>
                </div>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Eliminar</button>
            </form>
        </div>
    </div>
    
</article>

@endsection