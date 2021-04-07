@extends('adminlte::page')

@section('title', 'Editar - '.$plan->name)

@section('content_header')
    <h1>Editar <i>{{ $plan->name }}</i> <a href="{{ route('plans.index') }}"
            class="btn bg-light"><i class="fas fa-chevron-left"></i> Voltar</a></h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4> {{ $plan->name }} </h4>
        </div>
        <div class="card-body">
            <form action="{{ route('plans.update', $plan->id) }}" class="form" method="post">
                @csrf
                @method('PUT')
                @include('admin.includes.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
            <div style='text-align: right;'>
                <form action="{{route('plans.destroy',$plan->id)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
@endsection
