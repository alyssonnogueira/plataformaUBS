@extends('layouts.inside')

@section('content')
<div class="row">

  <?php foreach ($doctor as $key => $value): ?>
    <p class="col s12 m6 flow-text">
      Nome: {!! $value->name !!}
    </p>
    <p class="col s12 m6 flow-text">
      Email: {!! $value->email !!}
    </p>
    <p class="col s12 m6 flow-text">
      Rua: {!! $value->street !!}
    </p>
    <p class="col s12 m6 flow-text">
      CEP: {!! $value->zip !!}
    </p>
    <p class="col s12 m6 flow-text">
      Numero: {!! $value->number !!}
    </p>
    <p class="col s12 m6 flow-text">
      Complemento: {!! $value->complement !!}
    </p>
    <p class="col s12 m6 flow-text">
      Pais: {!! $value->country !!}
    </p>
    <p class="col s12 m6 flow-text">
      Estado: {!! $value->state !!}
    </p>
    <p class="col s12 m6 flow-text">
      Cidade: {!! $value->city !!}
    </p>
    <p class="col s12 m6 flow-text">
      Bairro: {!! $value->neighboorhood !!}
    </p>
    <p class="col s12 m6 flow-text">
      Chefe: {!! $value->boss !!}
    </p>
    <p class="col s12 m6 flow-text">
      CPF: {!! $value->cpf !!}
    </p>
    <p class="col s12 m6 flow-text">
      Data de Nascimento: {!! $value->birth !!}
    </p>
    <p class="col s12 m6 flow-text">
      RG: {!! $value->rg !!}
    </p>
    <p class="col s12 m6 flow-text">
      Telefone: {!! $value->phone !!}
    </p>
    <p class="col s12 m6 flow-text">
      Estado Civil: {!! $value->civil_status !!}
    </p>

  <?php endforeach; ?>
  <div class="center">
    <a href="{!! url('doctor') !!}" class="btn primary-color-lighten">Voltar</a>
  </div>
</div>
@endsection
