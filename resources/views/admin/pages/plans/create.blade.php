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
                @include('admin.includes.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
