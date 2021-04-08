@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <label>Nome do detalhe:</label>
    <input type="text" name='name' class="form-control mb-3" value="{{ $detail->name ?? old('name') }}">
</div>
