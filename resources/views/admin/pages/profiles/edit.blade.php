@extends('adminlte::page')

@section('title', "Editar perfil {$profile->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.show', $profile->id) }}">{{ $profile->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.edit', $profile->id) }}">Editar</a></li>
    </ol>
    <h1>Editar perfil <i>{{ $profile->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{route('profiles.update', $profile->id)}}" method="post">
                @csrf
                @method('PUT')
                @include('admin.pages.profiles.includes.form')
                <button type= 'submit' class="btn btn-success">Editar</button>
            </form>
            <div style='text-align: right;'>
                <form action="{{route('profiles.destroy',$profile->id)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        <div class="card-footer">
           
        </div>
    </div>
@endsection
