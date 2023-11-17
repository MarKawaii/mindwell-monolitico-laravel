@extends('admin.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="row">



        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="d-none d-xl-table-cell">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="d-none d-xl-table-cell">{{ $user['name'] }}</td>
                        <td class="d-none d-xl-table-cell">{{ $user['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>




    </div>
@endsection
