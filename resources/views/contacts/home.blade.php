@extends('layout.template')

@section('titlePage', 'Contactos')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Contactos</h3>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Agregar</a>
            <hr>
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Teléfono</th>
                    <th>E-mail</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->paternal }}</td>
                            <td>{{ $contact->maternal }}</td>
                            <td>{{ $contact->telephone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->name_category }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    
</article>

@endsection