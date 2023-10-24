@extends('layout.template')

@section('titlePage', 'Contactos')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Contactos</h3>

    @if ($mensaje = Session::get('message'))
        <!-- Mensaje -->
        <div class="alert alert-success" role="alert">
            <span>{{ $mensaje }}</span>
        </div>
    @endif

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
                    <th colspan="2">Acción</th>
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
                            <td>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-user-edit"></i> Actualizar
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-times"></i> Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    
</article>

@endsection