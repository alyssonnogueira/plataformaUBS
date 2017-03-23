@extends('layouts.inside')
@section('content')

@if (session('erro'))
<div class="flow-text">
  {{ session('erro')}}
</div>
@endif
<span class="flow-text">Editar médico</span>
<div class="row">

  <form action="{{ url('doctor/edit/'.$doctor->person_doctor)}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <p class="col s12 m6">
      <label for="name">Nome</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $doctor->name !!}">
    </p>
    <p class="col s12 m6">
      <label for="cpf">CPF</label>
      <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" value="{!! $doctor->cpf !!}">
    </p>
    <p class="col s12 m6">
      <label for="birth">Data de Nascimento</label>
      <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" value="{!! $doctor->birth !!}">
    </p>
    <p class="col s12 m6">
      <label for="rg">RG</label>
      <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" value="{!! $doctor->rg !!}">
    </p>
    <p class="col s12 m6">
      <label for="phone">Telefone</label>
      <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{!! $doctor->phone !!}">
    </p>
    <p class="col s12 m6">
      <label for="civil_status">Estado Civil</label>
      <select name="civil_status" type="text" class="form-control" id="civil_status" >
        <option value="Casado">Casado</option>
        <option value="Separado">Separado</option>
        <option value="Solteiro">Solteiro</option>
        <option value="Viuvo">Viuvo</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="crm">CRM</label>
      <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" value="{!! $doctor->crm !!}">
    </p>
    <input name="email" type="hidden" class="form-control" id="email" placeholder="email" value="{!! $doctor->email !!}">
    <p class="col s12 m6">
      <label for="password">Senha</label>
      <input name="password" type="password" class="form-control" id="password" placeholder="password" value="{!! $doctor->password !!}">
    </p>
    <p class="col s12 m6">
      <label for="boss">Médico Chefe</label>
      <select name="boss" type="text" class="form-control" id="boss">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <input name="doctor_login" type="hidden" class="form-control" id="doctor_login" placeholder="doctor_login" value="{!! $doctor->doctor_login !!}">
    <p class="col s12 m6">
      <label for="country">País</label>
      <input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $doctor->country !!}">
    </p>
    <p class="col s12 m6">
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
    </p>
    <p class="col s12 m6">
      <label for="city">Cidade</label>
      <input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $doctor->city !!}">
    </p>
    <p class="col s12 m6">
      <label for="neighboorhood">Bairro</label>
      <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $doctor->neighboorhood !!}">
    </p>
    <p class="col s12 m6">
      <label for="zip">CEP</label>
      <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $doctor->zip !!}">
    </p>
    <p class="col s12 m6">
      <label for="">Rua</label>
      <input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $doctor->street !!}">
    </p>
    <p class="col s12 m6">
      <label for="number">Número</label>
      <input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $doctor->number !!}">
    </p>
    <p class="col s12 m6">
      <label for="complement">Complemento</label>
      <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $doctor->complement !!}">
    </p>
    <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $doctor->id !!}">
    <p class="col s12 m6">
      <label for="ubs_name">Ubs</label>
      <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $doctor->ubs_name !!}">
    </p>
    <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $doctor->ubs_id !!}">
    <div class="center">
      <button type="submit" class="btn action-color">Salvar Alteração</button>
    </div>
  </form>
</div>
@endsection
