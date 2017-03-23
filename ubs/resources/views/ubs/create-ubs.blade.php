@extends('layouts.inside')

@section('content')
@if (session('erro'))
<div class="flow-text">
  {{ session('erro')}}
</div>
@endif
<div class="row">
  <p class="flow-text center">Cadastro de UBS</p>
  <form action="{{ url('ubs/store/')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <p class="col s12 m6">
      <label for="name">Nome</label>
      <input name="name" type="text" class="form-control" id="name">
    </p>
    <p class="col s12 m6">
      <label for="country">País</label>
      <input name="country" type="text" class="form-control" id="country" >
    </p>
    <p class="col s12 m6">
      <label for="state">Estado</label>
      <select name="state" type="text" class="form-control" id="state"  >
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MG">MG</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PE">PE</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="RS">RS</option>
        <option value="SC">SC</option>
        <option value="SE">SE</option>
        <option value="SP">SP</option>
        <option value="RS">TO</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="">Cidade</label>
      <input name="city" type="text" class="form-control" id="city">
    </p>
    <p class="col s12 m6">
      <label for="neighboorhood">Bairro</label>
      <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" >
    </p>
    <p class="col s12 m6">
      <label for="zip">CEP</label>
      <input name="zip" type="text" class="form-control" id="zip" >
    </p>
    <p class="col s12 m6">
      <label for="">Rua</label>
      <input name="street" type="text" class="form-control" id="street" >
    </p>
    <p class="col s12 m6">
      <label for="number">Número</label>
      <input name="number" type="number" class="form-control" id="number" >
    </p>
    <p class="col s12 m6">
      <label for="complement">Complemento</label>
      <input name="complement" type="text" class="form-control" id="complement">
    </p>
    <input name="address_id" type="hidden" class="form-control" id="address_id" >
    <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" >
    <div class="center col s12">
      <a href="{!! url('ubs') !!}" class="btn primary-color-lighten">Cancelar</a>
      <button type="submit" class="btn action-color">Salvar</button>
    </div>
  </form>
  @endsection
</div>
