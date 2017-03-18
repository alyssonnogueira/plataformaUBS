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
            left:20px;
            top: 130px;
            width:100%;
            text-align: left;
        }
        
        
    </style>
</head>
<body>

<form action="{{ url('pacient/edit/'.$pacient->person_pacient)}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="section">
    <table align="center" width=800>
        <tr><td align="center" colspan="2"><h2>Editar paciente</h2></td></tr>	
                        <tr><td><label for="name">Nome</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $pacient->name !!}"></td>	
	    		<td><label for="cpf">CPF</label>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" value="{!! $pacient->cpf !!}"></td></tr>
	    		<tr><td><label for="birth">Data de Nascimento</label>
                            <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" value="{!! $pacient->birth !!}"></td>
                        <td><label for="rg">RG</label>
                            <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" value="{!! $pacient->rg !!}"></td></tr>
	    		<tr><td><label for="phone">Telefone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{!! $pacient->phone !!}"></td>
	    		<td><label for="civil_status">Estado Civil</label>
                            <input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status" value="{!! $pacient->civil_status !!}"></td></tr>
                        <input name="email" type="hidden" class="form-control" id="email" placeholder="email" value="{!! $pacient->email !!}">
	    		<tr><td><label for="sus">SUS</label>
                            <input name="sus" type="text" class="form-control" id="sus" placeholder="sus" value="{!! $pacient->sus !!}"></td>
	    		<td><label for="weight">Peso</label>
                            <input name="weight" type="text" class="form-control" id="weight" placeholder="weight" value="{!! $pacient->weight !!}"></td></tr>
	    		<tr><td><label for="height">Altura</label>
                            <input name="height" type="text" class="form-control" id="height" placeholder="height" value="{!! $pacient->height !!}"></td>
                        <td><label for="skinColor">Cor</label>
                            <input name="skinColor" type="text" class="form-control" id="skinColor" placeholder="skinColor" value="{!! $pacient->skinColor !!}"></td></tr>
	    		<tr><td><label for="locomotionProblem">Problema de locomoção</label>
                            <input name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem" value="{!! $pacient->locomotionProblem !!}"></td>
                        <td><label for="bedridden">Acamado</label>
                            <input name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden" value="{!! $pacient->bedridden !!}"></td></tr>
	    		<tr><td><label for="osteoporosis">Osteoporose</label>
                            <input name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis" value="{!! $pacient->osteoporosis !!}"></td>
  			<td><label for="depression">Depressão</label>
                            <input name="depression" type="text" class="form-control" id="depression" placeholder="depression" value="{!! $pacient->depression !!}"></td></tr>
  			<tr><td><label for="insanity">Insanidade</label>
                            <input name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity" value="{!! $pacient->insanity !!}"></td>
	    		<td><label for="needCare">Necessita de cuidados</label>
                            <input name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare" value="{!! $pacient->needCare !!}"></td></tr>
	    		<tr><td><label for="armPerimeter">Perímetro do braço</label>
                            <input name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter" value="{!! $pacient->armPerimeter !!}"></td>
  			<td><label for="dm">DM</label>
                            <input name="dm" type="text" class="form-control" id="dm" placeholder="dm" value="{!! $pacient->dm !!}"></td></tr>
  			<tr><td><label for="has">HAS</label>
                            <input name="has" type="text" class="form-control" id="has" placeholder="has" value="{!! $pacient->has !!}"></td>
  			<td><label for="bookSenior">Caderneta de idoso</label>
                            <input name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior" value="{!! $pacient->bookSenior !!}"></td></tr>
  			<tr><td><label for="oralHealthRisk">Risco para a saúde bucal</label>
                            <input name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk" value="{!! $pacient->oralHealthRisk !!}"></td>
  			<td><label for="country">País</label>
                            <input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $pacient->country !!}"></td></tr>
  			<tr><td><label for="state">Estado</label>
                            <input name="state" type="text" class="form-control" id="state" placeholder="state" value="{!! $pacient->state !!}"></td>
  			<td><label for="">Cidade</label>
                            <input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $pacient->city !!}"></td></tr>
	    		<tr><td><label for="neighboorhood">Bairro</label>
                            <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $pacient->neighboorhood !!}"></td>
  			<td><label for="zip">CEP</label>
                            <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $pacient->zip !!}"></td></tr>
  			<tr><td><label for="">Rua</label>
                            <input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $pacient->street !!}"></td>
  			<td><label for="number">Número</label>
                            <input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $pacient->number !!}"></td></tr>
  			<tr><td><label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $pacient->complement !!}"></td></tr>
                            <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $pacient->id !!}"></td>
			<td><label for="ubs_name">Ubs</label>
                            <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $pacient->ubs_name !!}"></td></tr>
                            <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $pacient->ubs_id !!}">
                        <tr><td align="center" colspan="2"><button type="submit" class="btn btn-default">Salvar Alteração</button></td></tr>
                </table>
    </div>
</form>
</body>
@endsection