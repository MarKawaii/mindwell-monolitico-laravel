@extends('admin.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1 class="h3 align-middle">Clientes</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example" class="table table-striped nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>RUN</th>
                                    <th>EDAD</th>
                                    <th>CIUDAD</th>
                                    <th>COMUNA</th>
                                    <th>CREADO</th>
                                    <th>MODIFICADO</th>
                                    <th>ACCIONES</th>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->run }}</td>
                                        <td>{{ $cliente->edad ?  $cliente->edad : 'N/A'}}</td>
                                        <td>{{ $cliente->ciudad ?  $cliente->ciudad : 'N/A'}}</td>
                                        <td>{{ $cliente->comuna ?  $cliente->comuna : 'N/A'}}</td>
                                        <td>{{ \Carbon\Carbon::parse($cliente->created_at)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($cliente->updated_at)->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="" class="btn btn-success fa-solid fa-eye"></a>
                                            <a href="{{ route('cliente.edit', $cliente->id) }}"
                                                class="btn btn-warning fas fa-edit"></a>

                                            <!-- Formulario de eliminación -->
                                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger fa-solid fa-trash"
                                                    onclick="confirmDelete('{{ route('cliente.destroy', $cliente->id) }}', '{{ $cliente->name }}')"></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(clienteUrl, clienteName) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: `¿Estás seguro de que deseas eliminar al cliente "${clienteName}"? Esta acción no se puede deshacer.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si se confirma la eliminación, envía el formulario
                    document.querySelector(`form[action="${clienteUrl}"]`).submit();
                }
            });
        }
    </script>
@endsection
