@extends('layouts.inside')

@section('content')
@if (session('erro'))
<div class="alert alert-danger">
  {{ session('erro')}}
</div>
@endif
<div class="row">
  <p class="flow-text center">Cadastro de Médico<p>
    <form action="{{ url('doctor/store/')}}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="col s12 m6">
        <label for="name">Nome</label>
        <input name="name" type="text" class="form-control" id="name">
      </div>
      <div class="col s12 m6">
        <label for="cpf">CPF</label>
        <input name="cpf" type="text" class="form-control" id="cpf">
      </div>
      <div class="col s12 m6">
        <label for="birth">Data de Nascimento</label>
        <input name="birth" type="text" class="form-control" id="birth" placeholder="ANO-MES-DIA">
      </div>
      <div class="col s12 m6">
        <label for="rg">RG</label>
        <input name="rg" type="text" class="form-control" id="rg">
      </div>
      <div class="col s12 m6">
        <label for="phone">Telefone</label>
        <input name="phone" type="text" class="form-control" id="phone">
      </div>
      <div class="col s12 m6">
        <label for="civil_status">Estado Civil</label>
        <select name="civil_status" type="text" class="form-control" id="civil_status" >
          <option value="Casado">Casado</option>
          <option value="Separado">Separado</option>
          <option value="Solteiro">Solteiro</option>
          <option value="Viuvo">Viuvo</option>
        </select>
      </div>
      <div class="col s12 m6">
        <label for="crm">CRM</label>
        <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" >
      </div>
      <div class="col s12 m6">
        <label for="email">Email</label>
        <input name="email" type="text" class="form-control" id="email">
      </div>
      <div class="col s12 m6">
        <label for="password">Senha</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="password" >
      </div>
      <div class="col s12 m6">
        <label for="boss">Médico Chefe</label>
        <select name="boss" type="text" class="form-control" id="boss">
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>
      <div class="col s12 m6">
        <label for="country">País</label>
        <input name="country" type="text" class="form-control" id="country">
      </div>
      <div class="col s12 m6">
        <label for="state">Estado</label>
        <select name="state" type="text" class="form-control" id="state">
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
        <input name="city" type="text" class="form-control" id="city">
      </div>
      <div class="col s12 m6">
        <label for="neighboorhood">Bairro</label>
        <input name="neighboorhood" type="text" class="form-control" id="neighboorhood">
      </div>
      <div class="col s12 m6">
        <label for="zip">CEP</label>
        <input name="zip" type="text" class="form-control" id="zip" >
      </div>
      <div class="col s12 m6">
        <label for="">Rua</label>
        <input name="street" type="text" class="form-control" id="street">
      </div>
      <div class="col s12 m6">
        <label for="number">Número</label>
        <input name="number" type="number" class="form-control" id="number">
      </div>
      <div class="col s12 m6">
        <label for="complement">Complemento</label>
        <input name="complement" type="text" class="form-control" id="complement">
      </div>
      <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" >
      <div class="col s12 m6">
        <label for="ubs_name">Ubs</label>
        <select name="ubs_name" type="text" class="form-control" id="ubs_name">
          <?php foreach ($ubses as $key => $value): ?>
            <option value="{!! $value->name !!}">{!! $value->name !!}</option>>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col s12 center">
        <a href="{!! url('doctor') !!}" class="btn primary-color-lighten">Voltar</a>
        <button type="submit" class="btn action-color">Salvar</button>
      </div>
    </form>
  </div>

  @endsection
