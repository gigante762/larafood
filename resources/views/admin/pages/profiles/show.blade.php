@extends('adminlte::page')

@section('title', "Ver perfil {$profile->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{ $profile->name }}</a></li>
    </ol>
    <h1>Ver perfil <i>{{ $profile->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <p><b>Nome:</b> {{$profile->name}}</p>
            <p><b>Descrição:</b> {{$profile->description}}</p>
        </div>
        <div class="card-footer">
            <td><a href="{{ route('profiles.edit',[$profile->id]) }}" class="btn btn-primary">Editar</a></td>
        </div>
    </div>
@endsection
