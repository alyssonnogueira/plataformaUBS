@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
@endif
<head>
</head>
<body>
<div class="section">
<table align="center" width=700>
<form action="{{ url('doctor/store/')}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="form-group">
        <tr><td align="center" colspan="2"><h2>Cadastro de médico</h2></td></tr>
        <tr><td><label for="name">Nome</label>
        <input name="name" type="text" class="form-control" id="name"></td>
    </div>
    <div class="form-group">
        <td><label for="cpf">CPF</label>
        <input name="cpf" type="text" class="form-control" id="cpf"></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="birth">Data de Nascimento</label>
        <input name="birth" type="text" class="form-control" id="birth" placeholder="ANO-MES-DIA"></td>
    </div>
    <div class="form-group">
        <td><label for="rg">RG</label>
        <input name="rg" type="text" class="form-control" id="rg"></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="phone">Telefone</label>
                <input name="phone" type="text" class="form-control" id="phone"> </td>
    </div>
    <div class="form-group">
        <td><label for="civil_status">Estado Civil</label>
        <select name="civil_status" type="text" class="form-control" id="civil_status" >
            <option value="Casado">Casado</option>
            <option value="Separado">Separado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Viuvo">Viuvo</option>
        </select></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="crm">CRM</label>
        <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" ></td>
    </div>
    <div class="form-group">
        <td><label for="email">Email</label>
        <input name="email" type="text" class="form-control" id="email"></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="password">Senha</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="password" ></td>
    </div>
    <div class="form-group">
        <td><label for="boss">Médico Chefe</label>
        <select name="boss" type="text" class="form-control" id="boss">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="country">País</label>
        <input name="country" type="text" class="form-control" id="country" ></td>
    </div>
    <div class="form-group">
        <td><label for="state">Estado</label>
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
        </select></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="">Cidade</label>
        <input name="city" type="text" class="form-control" id="city"></td>
    </div>
    <div class="form-group">
        <td><label for="neighboorhood">Bairro</label>
        <input name="neighboorhood" type="text" class="form-control" id="neighboorhood"></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="zip">CEP</label>
                <input name="zip" type="text" class="form-control" id="zip" ></td>
    </div>
    <div class="form-group">
        <td><label for="">Rua</label>
        <input name="street" type="text" class="form-control" id="street"></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="number">Número</label>
                <input name="number" type="number" class="form-control" id="number"></td>
    </div>
    <div class="form-group">
        <td><label for="complement">Complemento</label>
        <input name="complement" type="text" class="form-control" id="complement"  ></td></tr>
    </div>
          <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" >
    <div class="form-group">
        <tr><td><label for="ubs_name">Ubs</label>
            <select name="ubs_name" type="text" class="form-control" id="ubs_name">
                <?php foreach ($ubses as $key => $value): ?>
                    <option value="{!! $value->name !!}">{!! $value->name !!}</option>>
                <?php endforeach; ?>
            </select></td></tr>
    </div>
          <tr><td align="right" colspan="2"><button type="submit" class="btn btn-default">Salvar</button></td></tr>
</form>
</table>
</div>
@endsection
</body>
