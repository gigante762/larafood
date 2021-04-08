@extends('adminlte::page')

@section('title', "Ver detalhe {$detail->name}")

@section('content_header')
    <h1>Ver detalhe do plano {{$plan->name}}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.show', [$plan->url, $plan->id]) }}">Ver</a></li>
    </ol>
    <h1>Ver detalhe <i>{{ $detail->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            Nome: {{$detail->name}}
        </div>
        <div class="card-footer">
            <td><a href="{{ route('details.plan.edit',[$plan->url, $detail->id]) }}" class="btn btn-primary">Editar</a></td>
        </div>
    </div>
@endsection
