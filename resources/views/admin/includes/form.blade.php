
@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name='name' class="form-control" value="{{ $plan->name ?? old('name')}}" @if (isset($frontendValidation)) required minlength="3" maxlength="255"   @endif>
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name='price' class="form-control" value="{{ $plan->price  ?? old('price')}}" @if (isset($frontendValidation)) required pattern="^\d+(\.\d{1,2})?$" @endif>
    <small class='text-muted'>Deve ser um número separado por ponto com até duas casas decimais. Ex: <b> 112.98</b></small>
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name='description' class="form-control" value="{{ $plan->description  ?? old('description')}}" @if (isset($frontendValidation)) minlength="3" maxlength="255" @endif>
</div>