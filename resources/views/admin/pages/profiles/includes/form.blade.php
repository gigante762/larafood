@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <label>Nome do detalhe:</label>
    <input type="text" name='name' class="form-control mb-3" value="{{ $profile->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Nome do detalhe:</label>
    <input type="text" name='description' class="form-control mb-3" value="{{ $profile->description ?? old('description') }}">
</div>
