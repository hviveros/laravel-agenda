@extends('layout.template')

@section('titlePage', 'Categorías')

@section('content')

<article class="py-5">
    <h1>Agenda</h1>
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
            <div class="table-responsive">
                <table class="table table-sm table-hover table-condensed" id="tableCategories">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
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
    </div>   
</article>

@endsection


@section('dataTable')
    <script>
        $(document).ready(function(){
            new DataTable('#tableCategories', 
            {
                stateSave: true,
                pagingType: "numbers",
                language: {
                    info: 'Mostrando página _PAGE_ de _PAGES_',
                    infoEmpty: 'No hay registros',
                    infoFiltered: '(filtrados de _MAX_ registros)',
                    lengthMenu: 'Mostrar _MENU_ registros por página',
                    zeroRecords: 'No se encontraron registros',
                    search: 'Buscar'
                }
            });
        });
    </script>
@endsection