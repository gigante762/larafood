@extends('adminlte::page')

@section('title', "Ver permissão {$permission->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissões</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.show', $permission->id) }}">{{ $permission->name }}</a></li>
    </ol>
    <h1>Ver permissão <i>{{ $permission->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <p><b>Nome:</b> {{$permission->name}}</p>
            <p><b>Descrição:</b> {{$permission->description}}</p>
        </div>
        <div class="card-footer">
            <td><a href="{{ route('permissions.edit',[$permission->id]) }}" class="btn btn-primary">Editar</a></td>
        </div>
    </div>
@endsection
