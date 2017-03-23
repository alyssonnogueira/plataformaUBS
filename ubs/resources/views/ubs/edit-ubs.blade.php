@extends('layouts.inside')

@section('content')
@if (session('erro'))
<div class="flow-text">
  {{ session('erro')}}
</div>
@endif
<div class="row">
  <p class="flow-text center">Editar paciente</p>
  <form action="{{ url('ubs/edit/'.$ubs->id)}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col s12 m6">
      <label for="name">Nome</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $ubs->name !!}">
    </div>

    <div class="col s12 m6">
      <label for="country">País</label>
      <input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $ubs->country !!}">
    </div>
    <div class="col s12 m6">
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
    </div>
    <div class="col s12 m6">
      <label for="">Cidade</label>
      <input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $ubs->city !!}">
    </div>
    <div class="col s12 m6">
      <label for="neighboorhood">Bairro</label>
      <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $ubs->neighboorhood !!}">
    </div>
    <div class="col s12 m6">
      <label for="zip">CEP</label>
      <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $ubs->zip !!}">
    </div>
    <div class="col s12 m6">
      <label for="">Rua</label>
      <input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $ubs->street !!}">
    </div>
    <div class="col s12 m6">
      <label for="number">Número</label>
      <input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $ubs->number !!}">
    </div>
    <div class="col s12 m6">
      <label for="complement">Complemento</label>
      <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $ubs->complement !!}">
    </div>
    <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $ubs->id !!}">
    <div class="col s12 m6">
      <label for="ubs_name">Ubs</label>
      <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $ubs->name !!}">
    </div>
    <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $ubs->id !!}">
    <div class="center">
      <a href="{!! url('ubs') !!}" class="btn primary-color-lighten">Voltar</a>
      <button type="submit" class="btn action-color">Salvar Alterações</button>
    </div>
  </form>
</div>

@endsection
