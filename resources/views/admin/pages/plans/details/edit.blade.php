@extends('adminlte::page')

@section('title', "Editar detalhe {$detail->name}")

@section('content_header')
    <h1>Editar detalhe do plano {{$plan->name}}</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.edit', [$plan->url, $plan->id]) }}">Editar</a></li>
    </ol>
    <h1>Editar detalhe <i>{{ $detail->name }}</i></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{route('details.plan.update',[$plan->url, $detail->id])}}" method="post">
                @method('PUT')
                @include('admin.pages.plans.details.includes.form')
                <button type='submit' class="btn btn-success">Confirmar</button>
            </form>
        </div>
        <div class="card-footer">
            <div style='text-align: right;'>
                <form action="{{route('details.plan.destroy',[$plan->url,$detail->id])}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
@endsection
