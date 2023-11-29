@extends('admin.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class='container'>
        <span>{{ $user->name}}</span>
        <span>{{ $user->email}}</span>
        <span>{{ $user->run ? $user->run : 'N/A'}}</span>
        <span>{{ $user->celular}}</span>
        <span>{{ $user->genero}}</span>
        <span>{{ $user->estado_civil}}</span>
        <span>{{ $user->direccion}}</span>
    </div>
@endsection
