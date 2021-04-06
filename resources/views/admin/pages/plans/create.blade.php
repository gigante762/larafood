@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{route('plans.store')}}" class="form" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label >Nome:</label>
                    <input type="text" name='name' class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label >Preço:</label>
                    <input type="text" name='price' class="form-control" value="{{old('price')}}">
                </div>
                <div class="form-group">
                    <label >Descrição:</label>
                    <input type="text" name='description' class="form-control" value="{{old('description')}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
