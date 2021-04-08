@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
    </ol>
    <h1>Detalhes do plano <i>{{ $plan->name }}</i> <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-success">Cadastrar Detalhe</a></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @include('admin.includes.alerts')
        </div>
        <div class="card-body">
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td style="width: 100px;">Acões</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{ $detail->name }}</td>
                            <td><a href="{{ route('details.plan.show',[$plan->url, $detail->id]) }}" class="btn btn-warning">Ver</a></td>
                            <td><a href="{{ route('details.plan.edit',[$plan->url, $detail->id]) }}" class="btn btn-primary">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@endsection
