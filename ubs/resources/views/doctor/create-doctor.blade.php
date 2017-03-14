@extends('layouts.inside')

@section('content')
@if (session('erro'))
    <div class="alert alert-danger">
      {{ session('erro')}}
    </div>
  @endif
<form action="{{ url('doctor/store/')}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
<div class="row">
  <div class="col-md-12">
  <h1> Médico </h1>
    <div class="row">
      <div class="form-group">
          <label for="name">Nome</label>
          <input name="name" type="text" class="form-control" id="name" placeholder="name" >
        </div>
      <br>
      <div class="form-group">
          <label for="cpf">CPF</label>
          <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" >
        </div>
        <br>
      <div class="form-group">
          <label for="birth">Data de Nascimento</label>
          <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" >
        </div>
        <div class="form-group">
          <label for="rg">RG</label>
          <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" >
        </div>
        <div class="form-group">
          <label for="phone">Telefone</label>
          <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" >
        </div>
        <div class="form-group">
          <label for="civil_status">Estado Civil</label>
          <input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status" >
        </div>
        <div class="form-group">
          <label for="crm">CRM</label>
          <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" >
        </div>
    </div>
  </div>
  <div class="col-md-12">
  <h1> Login </h1> 
    <div class="row">
      <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="text" class="form-control" id="email" placeholder="email" >
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="password" >
        </div>
      <div class="form-group">
          <label for="boss">Médico Chefe</label>
          <input name="boss" type="text" class="form-control" id="boss" placeholder="boss" >
        </div>
    </div>
  </div>
  <h1> Endereço </h1>
  <div class="col-md-12">
    <div class="row">
      <div class="form-group">
          <label for="country">País</label>
          <input name="country" type="text" class="form-control" id="country" placeholder="country" >
        </div>
        <div class="form-group">
          <label for="state">Estado</label>
          <input name="state" type="text" class="form-control" id="state" placeholder="state" >
        </div>
        <div class="form-group">
          <label for="">Cidade</label>
          <input name="city" type="text" class="form-control" id="city" placeholder="city" >
        </div>
        <div class="form-group">
          <label for="neighboorhood">Bairro</label>
          <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" >
        </div>
        <div class="form-group">
          <label for="zip">CEP</label>
          <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" >
        </div>
        <div class="form-group">
          <label for="">Rua</label>
          <input name="street" type="text" class="form-control" id="street" placeholder="street" >
        </div>
        <div class="form-group">
          <label for="number">Número</label>
          <input name="number" type="text" class="form-control" id="number" placeholder="number" >
        </div>
        <div class="form-group">
          <label for="complement">Complemento</label>
          <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" >
        </div>
          <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" >
    </div>
  </div>
  <div class="col-md-12">
    <div class="row">
      <div class="form-group">
          <label for="ubs_name">Ubs</label>
          <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name"">
        </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-default">Salvar</button>
</form>
@endsection