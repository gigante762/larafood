@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}">Perfis</a></li>
    </ol>
    <h1>Perfis <a href="{{ route('profiles.create') }}" class="btn btn-dark">ADD <i class="far fa-plus-square"></i></a></h1>

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('profiles.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name='filter' placeholder="Nome" class="form-control mx-1"
                    value="{{ $filters['filter'] ?? '' }}" required>
                <button class="btn btn-info"><i class="fas fa-search"></i> Persquisar</button>

               
            </form>
        </div>
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td width="250">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr style="width: 10px;">
                            <td>{{ $profile->name }}</td>
                            <td><a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-warning">Ver</a>
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary">Editar</a>                       
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@endsection
