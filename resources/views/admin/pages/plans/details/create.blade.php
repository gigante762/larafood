@extends('adminlte::page')

@section('title', "Adicionar novo detalhe ao plano {$plan->name}")

@section('content_header')
    <h1>Novo detalhe <a href="{{route('plans.create')}}" class="btn">ADD</a></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.create', $plan->url) }}">Novo</a></li>
    </ol>
    <h1>Detalhes do plano <i>{{ $plan->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="route('details.plan.store')" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label>Nome do detalhe:</label>
                    <input type="text" name='name' class="form-control" value="{{ old('name')}}">
                </div>
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
@endsection
