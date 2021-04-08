@extends('adminlte::page')

@section('title', "Criar permissão")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissões</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.create') }}">Criar</a></li>
    </ol>
    <h1>Criar permissão</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{route('permissions.store')}}" method="post">
                @csrf
                @method('POST')
                @include('admin.pages.permissions.includes.form')
                <button type= 'submit' class="btn btn-success">Criar</button>
            </form>
        </div>
        <div class="card-footer">
           
        </div>
    </div>
@endsection
