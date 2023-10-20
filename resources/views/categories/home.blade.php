@extends('layout.template')

@section('titlePage', 'Categorías')

@section('content')

<article class="py-5">
    <h1>Agenda de contactos</h1>
    <h3>Categorías</h3>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Agregar</a>
            <hr>
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    
</article>

@endsection