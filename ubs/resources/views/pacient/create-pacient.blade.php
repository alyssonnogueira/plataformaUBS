@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
  @endif
  
<form action="{{ url('pacient/store/'.$pacient->person_pacient)}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
<div class="row">
	<div class="col-md-12">
	<h1> Paciente </h1>
		<div class="row">
			<div class="form-group">
	    		<label for="name">Nome</label>
	    		<input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $pacient->name !!}">
  			</div>
			<br>
			<div class="form-group">
	    		<label for="cpf">CPF</label>
	    		<input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" value="{!! $pacient->cpf !!}">
  			</div>
  			<br>
			<div class="form-group">
	    		<label for="birth">Data de Nascimento</label>
	    		<input name="birth" type="text" class="form-control" id="birth" placeholder="birth" value="{!! $pacient->birth !!}">
  			</div>
  			<div class="form-group">
	    		<label for="rg">RG</label>
	    		<input name="rg" type="text" class="form-control" id="rg" placeholder="rg" value="{!! $pacient->rg !!}">
  			</div>
  			<div class="form-group">
	    		<label for="phone">Telefone</label>
	    		<input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{!! $pacient->phone !!}">
  			</div>
  			<div class="form-group">
	    		<label for="civil_status">Estado Civil</label>
	    		<input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status" value="{!! $pacient->civil_status !!}">
  			</div>
                        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="text" class="form-control" id="email" placeholder="email" >
        </div>
  			<div class="form-group">
	    		<label for="sus">SUS</label>
	    		<input name="sus" type="text" class="form-control" id="sus" placeholder="sus" value="{!! $pacient->sus !!}">
  			</div>
                        <div class="form-group">
	    		<label for="weight">Peso</label>
	    		<input name="weight" type="text" class="form-control" id="weight" placeholder="weight" value="{!! $pacient->weight !!}">
  			</div>
                        <div class="form-group">
	    		<label for="height">Altura</label>
	    		<input name="height" type="text" class="form-control" id="height" placeholder="height" value="{!! $pacient->height !!}">
  			</div>
                        <div class="form-group">
	    		<label for="skinColor">Cor</label>
	    		<input name="skinColor" type="text" class="form-control" id="skinColor" placeholder="skinColor" value="{!! $pacient->skinColor !!}">
  			</div>
                        <div class="form-group">
	    		<label for="locomotionProblem">Problema de locomoção</label>
	    		<input name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem" value="{!! $pacient->locomotionProblem !!}">
  			</div>
                        <div class="form-group">
	    		<label for="bedridden">Acamado</label>
	    		<input name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden" value="{!! $pacient->bedridden !!}">
  			</div>
                        <div class="form-group">
	    		<label for="osteoporosis">Osteoporose</label>
	    		<input name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis" value="{!! $pacient->osteoporosis !!}">
  			</div>
                        <div class="form-group">
	    		<label for="depression">Depressão</label>
	    		<input name="depression" type="text" class="form-control" id="depression" placeholder="depression" value="{!! $pacient->depression !!}">
  			</div>
                        <div class="form-group">
	    		<label for="insanity">Insanidade</label>
	    		<input name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity" value="{!! $pacient->insanity !!}">
  			</div>
                        <div class="form-group">
	    		<label for="needCare">Necessita de cuidados</label>
	    		<input name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare" value="{!! $pacient->needCare !!}">
  			</div>
                        <div class="form-group">
	    		<label for="armPerimeter">Perímetro do braço</label>
	    		<input name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter" value="{!! $pacient->armPerimeter !!}">
  			</div>
                        <div class="form-group">
	    		<label for="dm">DM</label>
	    		<input name="dm" type="text" class="form-control" id="dm" placeholder="dm" value="{!! $pacient->dm !!}">
  			</div>
                        <div class="form-group">
	    		<label for="has">HAS</label>
	    		<input name="has" type="text" class="form-control" id="has" placeholder="has" value="{!! $pacient->has !!}">
  			</div>
                        <div class="form-group">
	    		<label for="bookSenior">Caderneta de idoso</label>
	    		<input name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior" value="{!! $pacient->bookSenior !!}">
  			</div>
                        <div class="form-group">
	    		<label for="oralHealthRisk">Risco para a saúde bucal</label>
	    		<input name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk" value="{!! $pacient->oralHealthRisk !!}">
  			</div>       
		</div>
	</div>
	<h1> Endereço </h1>
	<div class="col-md-12">
		<div class="row">
			<div class="form-group">
	    		<label for="country">País</label>
	    		<input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $pacient->country !!}">
  			</div>
  			<div class="form-group">
	    		<label for="state">Estado</label>
	    		<input name="state" type="text" class="form-control" id="state" placeholder="state" value="{!! $pacient->state !!}">
  			</div>
  			<div class="form-group">
	    		<label for="">Cidade</label>
	    		<input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $pacient->city !!}">
  			</div>
  			<div class="form-group">
	    		<label for="neighboorhood">Bairro</label>
	    		<input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $pacient->neighboorhood !!}">
  			</div>
  			<div class="form-group">
	    		<label for="zip">CEP</label>
	    		<input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $pacient->zip !!}">
  			</div>
  			<div class="form-group">
	    		<label for="">Rua</label>
	    		<input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $pacient->street !!}">
  			</div>
  			<div class="form-group">
	    		<label for="number">Número</label>
	    		<input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $pacient->number !!}">
  			</div>
  			<div class="form-group">
	    		<label for="complement">Complemento</label>
	    		<input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $pacient->complement !!}">
  			</div>
	    		<input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $pacient->id !!}">
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="form-group">
	    		<label for="ubs_name">Ubs</label>
	    		<input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $pacient->ubs_name !!}">
	    		<input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $pacient->ubs_id !!}">
  			</div>
		</div>
	</div>
</div>

<button type="submit" class="btn btn-default">Salvar Alteração</button>
</form>
@endsection
