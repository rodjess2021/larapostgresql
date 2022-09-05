@extends('adminlte::page')

@section('title', 'Lista de contactos')

@section('content_header')
    <h1>Lista de contactos</h1>
@stop

@section('content')
<div>
    <a href="contactos/create" class="btn btn-primary mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="9" />
            <line x1="9" y1="12" x2="15" y2="12" />
            <line x1="12" y1="9" x2="12" y2="15" />
        </svg>Añadir contacto
    </a>
    
</div>

<table id="contactos" class="table table-dark table-striped mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contactos as $contacto)
        <tr>
            <td>{{ $contacto->id }}</td>
            <td>{{ $contacto->nombre }}</td>
            <td>{{ $contacto->apellido }}</td>
            <td>{{ $contacto->telefono }}</td>
            <td>{{ $contacto->correo }}</td>
            <td>
                <form action="{{route ('contactos.destroy',$contacto->id)}}" method="POST">
                    <a href="/contactos/{{$contacto->id}}/edit" class="btn btn-info">
                        Editar
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                            <path d="M16 5l3 3" />
                            <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                        </svg>
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Borrar
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#contactos').DataTable({
        "lengthMenu": [[5,10,50,-1], [5,10,50, "ALL"]]
    });
    });
</script>
@stop