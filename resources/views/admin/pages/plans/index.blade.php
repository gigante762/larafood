@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}">Planos</a></li>
    </ol>
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD <i class="far fa-plus-square"></i></a></h1>

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="post" class="form form-inline">
                @csrf
                <input type="text" name='filter' placeholder="Nome" class="form-control mx-1"
                    value="{{ $filters['filter'] ?? '' }}">
                <button class="btn btn-info"><i class="fas fa-search"></i> Persquisar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Preço</td>
                        <td style="width: 50px;">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>R${{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td><a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-info">Detalhes</a>
                            </td>
                            <td><a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@endsection
