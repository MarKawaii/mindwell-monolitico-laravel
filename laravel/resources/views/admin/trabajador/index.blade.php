@extends('admin.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1 class="h3 align-middle">Trabajador</h1>
            <a class="btn btn-sm btn-success text-white" href="{{ route('trabajador.create') }}">
                Nuevo Trabajador
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example" class="table table-striped nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>EMAIL</th>
                                    <th>CREADO</th>
                                    <th>MODIFICADO</th>
                                    <th>ACCIONES</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="" class="btn btn-success fa-solid fa-eye"></a>
                                            <a href="{{ route('trabajador.edit', $user->id) }}"
                                                class="btn btn-warning fas fa-edit"></a>

                                            <!-- Formulario de eliminación -->
                                            <form action="{{ route('trabajador.destroy', $user->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger fa-solid fa-trash"
                                                    onclick="confirmDelete('{{ route('trabajador.destroy', $user->id) }}', '{{ $user->name }}')"></button>

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
        function confirmDelete(userUrl, userName) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: `¿Estás seguro de que deseas eliminar al trabajador "${userName}"? Esta acción no se puede deshacer.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si se confirma la eliminación, envía el formulario
                    document.querySelector(`form[action="${userUrl}"]`).submit();
                }
            });
        }
    </script>
@endsection
