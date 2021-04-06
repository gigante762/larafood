@extends('adminlte::page')

@section('title', 'Editar - '.$plan->name)

@section('content_header')
    <h1>Editar <i>{{ $plan->name }}</i> <a href="{{ route('plans.index') }}"
            class="btn btn-primary">Voltar</a></h1>
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
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name='name' class="form-control" value="{{ $plan->name ?? old('name')}}">
                </div>
                <div class="form-group">
                    <label>Preço:</label>
                    <input type="text" name='price' class="form-control" value="{{ $plan->price  ?? old('price')}}">
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name='description' class="form-control" value="{{ $plan->description  ?? old('description')}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
            <div style='text-align: right;'>
                <form action="{{route('plans.destroy',$plan->id)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-sm btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
