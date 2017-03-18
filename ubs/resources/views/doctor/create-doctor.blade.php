@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
@endif
<head>
 <link rel="stylesheet" href="/css/estilo.css" media="screen" title="no title" charset="utf-8" >
    <script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="/js/bootstrap.min.js"></script>
    <style type="text/css">
        .section{
            position:fixed;
            left:0px;
            top: 150px;
            width:100%;
            text-align: center;
        }
        
        
    </style>
</head>
<body>
<div class="section">
<table align="center" width=700>
<form action="{{ url('doctor/store/')}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="form-group">
        <tr><td align="center" colspan="2"><h2>Cadastro de médico</h2></td></tr>
        <tr><td><label for="name">Nome</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="name" ></td>
    </div>
    <div class="form-group">
        <td><label for="cpf">CPF</label>
        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="birth">Data de Nascimento</label>
        <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" ></td>
    </div>
    <div class="form-group">
        <td><label for="rg">RG</label>
        <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="phone">Telefone</label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="phone"> </td>
    </div>
    <div class="form-group">
        <td><label for="civil_status">Estado Civil</label>
        <input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="crm">CRM</label>
        <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" ></td>
    </div>
    <div class="form-group">
        <td><label for="email">Email</label>
        <input name="email" type="text" class="form-control" id="email" placeholder="email" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="password">Senha</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="password" ></td>
    </div>
    <div class="form-group">
        <td><label for="boss">Médico Chefe</label>
        <input name="boss" type="text" class="form-control" id="boss" placeholder="boss" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="country">País</label>
        <input name="country" type="text" class="form-control" id="country" placeholder="country" ></td>
    </div>
    <div class="form-group">
        <td><label for="state">Estado</label>
        <input name="state" type="text" class="form-control" id="state" placeholder="state" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="">Cidade</label>
        <input name="city" type="text" class="form-control" id="city" placeholder="city" ></td>
    </div>
    <div class="form-group">
        <td><label for="neighboorhood">Bairro</label>
        <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="zip">CEP</label>
        <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" ></td>
    </div>
    <div class="form-group">
        <td><label for="">Rua</label>
        <input name="street" type="text" class="form-control" id="street" placeholder="street" ></td></tr>
    </div>
    <div class="form-group">
        <tr><td><label for="number">Número</label>
        <input name="number" type="text" class="form-control" id="number" placeholder="number" ></td>
    </div>
    <div class="form-group">
        <td><label for="complement">Complemento</label>
        <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" ></td></tr>
    </div>
          <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" >
    <div class="form-group">
        <tr><td><label for="ubs_name">Ubs</label>
        <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name"></td></tr>
    </div>
          <tr><td align="right" colspan="2"><button type="submit" class="btn btn-default">Salvar</button></td></tr>
</form>
</table>
</div>
@endsection
</body>