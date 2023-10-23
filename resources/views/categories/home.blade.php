@extends('layout.template')

@section('titlePage', 'Categorías')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Categorías</h3>

    @if ($mensaje = Session::get('message'))
        <!-- Mensaje -->
        <div class="alert alert-success" role="alert">
            <span>{{ $mensaje }}</span>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Agregar</a>
            <hr>
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="2">Acción</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-user-edit"></i> Actualizar
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-danger btn-sm">
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