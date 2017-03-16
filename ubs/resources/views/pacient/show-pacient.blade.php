@extends('layouts.inside')

@section('content')
<div class="row">
	<?php foreach ($pacient as $key => $value): ?>
	<div class="col-md-12">
	<h1> Perfil </h1>
		<div class="row">
			<center>
			</center>
			
		</div>
		<div class="row">
			<h3> Paciente: {!! $value->person_pacient !!} </h3>
			<h3> Nome: {!! $value->name !!} </h3>
			<h3> Email: {!! $value->email !!} </h3>
			<h3> Rua: {!! $value->street !!} </h3>
			<h3> CEP: {!! $value->zip !!} </h3>
			<h3> Numero: {!! $value->number !!} </h3>
			<h3> Complemento: {!! $value->complement !!} </h3>
			<h3> Pais: {!! $value->country !!} </h3>
			 <h3> Estado: {!! $value->state !!} </h3>
			 <h3> Cidade: {!! $value->city !!}</h3>
			 <h3> Bairro: {!! $value->neighboorhood !!}</h3> 
			 <h3> CPF: {!! $value->cpf !!} </h3> 
			 <h3> Data de Nascimento: {!! $value->birth !!} </h3>
			 <h3> RG: {!! $value->rg !!} </h3>
			 <h3> Telefone: {!! $value->phone !!} </h3>
			 <h3> Estado Civil: {!! $value->civil_status !!} </h3>
                         <h3> SUS: {!! $value->sus !!}</h3>
                         <h3> Peso: {!! $value->weight !!}</h3>
                         <h3> Altura: {!! $value->height !!}</h3>
                         <h3> Cor: {!! $value->skinColor !!}</h3>
                         <h3> Problema de locomoção: {!! $value->locomotionProblem !!}</h3>
                         <h3> Acamado: {!! $value->bedridden !!}</h3>
                         <h3> Osteoporose: {!! $value->osteoporosis !!}</h3>
                         <h3> Depressão: {!! $value->depression !!}</h3>
                         <h3> Insanidade: {!! $value->insanity !!}</h3>
                         <h3> Necessita cuidados: {!! $value->needCare !!}</h3>
                         <h3> Perímetro do braço: {!! $value->armPerimeter !!}</h3>
                         <h3> DM: {!! $value->dm !!}</h3>
                         <h3> HAS: {!! $value->has !!}</h3>
                         <h3> Caderneta de idoso: {!! $value->bookSenior !!}</h3>
                         <h3> Risco para a saúde bucal: {!! $value->oralHealthRisk !!}</h3>
			 <a href="{!! url('pacient') !!}" class="btn btn-back" console="button"> Voltar </a>
 			<br>
		</div>
	</div>
	<?php endforeach; ?>
</div>

@endsection
