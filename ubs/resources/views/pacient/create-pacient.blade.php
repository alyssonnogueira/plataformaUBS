@extends('layouts.inside')

@section('content')
@if (session('erro'))
<div class="flow-text">
  {{ session('erro')}}
</div>
@endif
<p class="flow-text center">Cadastro de paciente</p>
  <form action="{{ url('pacient/store/')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <p class="col s12 m6">
      <label for="name">Nome</label>
      <input name="name" type="text" class="form-control" id="name">
    </p>
    <p class="col s12 m6">
      <label for="cpf">CPF</label>
      <input name="cpf" type="text" class="form-control" id="cpf">
    </p>
    <p class="col s12 m6">
      <label for="birth">Data de Nascimento</label>
      <input name="birth" type="text" class="form-control" id="birth" placeholder="ANO-MES-DIA">
    </p>
    <p class="col s12 m6">
      <label for="rg">RG</label>
      <input name="rg" type="text" class="form-control" id="rg">
    </p>
    <p class="col s12 m6">
      <label for="phone">Telefone</label>
      <input name="phone" type="text" class="form-control" id="phone">
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
      <label for="email">Email</label>
      <input name="email" type="text" class="form-control" id="email">
    </p>
    <p class="col s12 m6">
      <label for="sus">SUS</label>
      <input name="sus" type="text" class="form-control" id="sus" >
    </p>
    <p class="col s12 m6">
      <label for="weight">Peso</label>
      <input name="weight" type="text" class="form-control" id="weight">
    </p>
    <p class="col s12 m6">
      <label for="height">Altura</label>
      <input name="height" type="text" class="form-control" id="height">
    </p>
    <p class="col s12 m6">
      <label for="skinColor">Cor</label>
      <select name="skinColor" type="text" class="form-control" id="skinColor">
        <option value="Branco">Branco</option>
        <option value="Negro">Negro</option>
        <option value="Pardo">Pardo</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="locomotionProblem">Problema de locomoção</label>
      <select name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="bedridden">Acamado</label>
      <select name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="osteoporosis">Osteoporose</label>
      <select name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="depression">Depressão</label>
      <select name="depression" type="text" class="form-control" id="depression" placeholder="depression">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="insanity">Insanidade</label>
      <select name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="needCare">Necessita de cuidados</label>
      <select name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="armPerimeter">Perímetro do braço</label>
      <select name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="dm">DM</label>
      <input name="dm" type="text" class="form-control" id="dm">
    </p>
    <p class="col s12 m6">
      <label for="has">HAS</label>
      <input name="has" type="text" class="form-control" id="has">
    </p>
    <p class="col s12 m6">
      <label for="bookSenior">Caderneta de idoso</label>
      <select name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
    </p>
    <p class="col s12 m6">
      <label for="oralHealthRisk">Risco para a saúde bucal</label>
      <select name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk">
        <option value="1">Sim</option>
        <option value="0">Não</option>
      </select>
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
    <p class="col s12 m6">
      <label for="ubs_name">Ubs</label>
      <select name="ubs_name" type="text" class="form-control" id="ubs_name">
        <?php foreach ($ubses as $key => $value): ?>
          <option value="{!! $value->name !!}">{!! $value->name !!}</option>>
        <?php endforeach; ?>
      </select>
    </p>
    <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" >
    <div class="center">
      <a href="{!! url('pacient') !!}" class="btn primary-color-lighten">Cancelar</a>
      <button type="submit" class="btn action-color">Salvar</button>
    </div>
  </form>
  @endsection
