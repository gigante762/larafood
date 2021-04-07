@extends('adminlte::page')

@section('title', $plan->name)

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
    </ol>
    <h1>Plano <i>{{ $plan->name }}</i><a href="{{ route('plans.index') }}" class="btn bg-light"><i
                class="fas fa-chevron-left"></i> Voltar</a></h1>

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4> {{ $plan->name }} </h4>
        </div>
        <div class="card-body">
            <ul>
                <p><b>Nome:</b> {{ $plan->name }} </p>
                <p><b>Url: </b>{{ $plan->url }} </p>
                <p><b>Preço:</b> R${{ number_format($plan->price, 2, ',', '.') }} </p>
                <p><b>Descrição:</b> {{ $plan->description }}</p>
            </ul>

        </div>
        <div class="card-footer">
            <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@endsection
