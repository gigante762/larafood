@extends('adminlte::page')

@section('title', "Editar permissão {$permission->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissões</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.show', $permission->id) }}">{{ $permission->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.edit', $permission->id) }}">Editar</a></li>
    </ol>
    <h1>Editar permissão <i>{{ $permission->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{route('permissions.update', $permission->id)}}" method="post">
                @csrf
                @method('PUT')
                @include('admin.pages.permissions.includes.form')
                <button type= 'submit' class="btn btn-success">Editar</button>
            </form>
            <div style='text-align: right;'>
                <form action="{{route('permissions.destroy',$permission->id)}}" method="post" >
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
