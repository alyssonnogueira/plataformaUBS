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
            text-align: left;
        }
        
        
    </style>
</head>
<body>
<form action="{{ url('doctor/edit/'.$doctor->person_doctor)}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="section">
    <table align="center" width=800>
        <tr><td align="center" colspan="2"><h2>Editar médico</h2></td></tr>	
	    		<tr><td><label for="name">Nome</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $doctor->name !!}"></td>
                        <td><label for="cpf">CPF</label>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" value="{!! $doctor->cpf !!}"></td></tr>
	    		<tr><td><label for="birth">Data de Nascimento</label>
                            <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" value="{!! $doctor->birth !!}"></td>
                        <td><label for="rg">RG</label>
                            <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" value="{!! $doctor->rg !!}"></td></tr>
	    		<tr><td><label for="phone">Telefone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{!! $doctor->phone !!}"></td>
                        <td><label for="civil_status">Estado Civil</label>
                            <input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status" value="{!! $doctor->civil_status !!}"></td></tr>
	    		<tr><td><label for="crm">CRM</label>
                            <input name="crm" type="text" class="form-control" id="crm" placeholder="crm" value="{!! $doctor->crm !!}"></td>
                            <input name="email" type="hidden" class="form-control" id="email" placeholder="email" value="{!! $doctor->email !!}">
	    		<td><label for="password">Senha</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="password" value="{!! $doctor->password !!}"></td></tr>
                        <tr><td><label for="boss">Médico Chefe</label>
                            <input name="boss" type="text" class="form-control" id="boss" placeholder="boss" value="{!! $doctor->boss !!}"></td>
                            <input name="doctor_login" type="hidden" class="form-control" id="doctor_login" placeholder="doctor_login" value="{!! $doctor->doctor_login !!}">
	    		<td><label for="country">País</label>
                            <input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $doctor->country !!}"></td></tr>
                        <tr><td><label for="state">Estado</label>
                            <input name="state" type="text" class="form-control" id="state" placeholder="state" value="{!! $doctor->state !!}"></td>
	    		<td><label for="">Cidade</label>
                            <input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $doctor->city !!}"></td></tr>
                        <tr><td><label for="neighboorhood">Bairro</label>
                            <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $doctor->neighboorhood !!}"></td>
	    		<td><label for="zip">CEP</label>
                            <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $doctor->zip !!}"></td></tr>
                        <tr><td><label for="">Rua</label>
                            <input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $doctor->street !!}"></td>
	    		<td><label for="number">Número</label>
                            <input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $doctor->number !!}"></td></tr>
                        <tr><td><label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $doctor->complement !!}"></td>
                            <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $doctor->id !!}">
	    		<td><label for="ubs_name">Ubs</label>
                            <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $doctor->ubs_name !!}"></td></tr>
                            <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $doctor->ubs_id !!}">
                        <tr><td colspan="2" align="center"><button type="submit" class="btn btn-default">Salvar Alteração</button>
        </table>
    </div>
</form>
</body>
@endsection