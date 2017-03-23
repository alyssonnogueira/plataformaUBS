@extends('layouts.inside')

@section('content')
<div class="row">

	<?php foreach ($pacient as $key => $value): ?>
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
		<p class="col s12 m6 flow-text">
			SUS: {!! $value->sus !!}
		</p>
		<p class="col s12 m6 flow-text">
			Peso: {!! $value->weight !!}
		</p>
		<p class="col s12 m6 flow-text">
			Altura: {!! $value->height !!}
		</p>
		<p class="col s12 m6 flow-text">
			Cor: {!! $value->skinColor !!}
		</p>
		<p class="col s12 m6 flow-text">
			Problema de locomoção: {!! $value->locomotionProblem !!}
		</p>
		<p class="col s12 m6 flow-text">
			Acamado: {!! $value->bedridden !!}
		</p>
		<p class="col s12 m6 flow-text">
			Osteoporose: {!! $value->osteoporosis !!}
		</p>
		<p class="col s12 m6 flow-text">
			Depressão: {!! $value->depression !!}
		</p>
		<p class="col s12 m6 flow-text">
			Insanidade: {!! $value->insanity !!}
		</p>
		<p class="col s12 m6 flow-text">
			Necessita cuidados: {!! $value->needCare !!}
		</p>
		<p class="col s12 m6 flow-text">
			Perímetro do braço: {!! $value->armPerimeter !!}
		</p>
		<p class="col s12 m6 flow-text">
			DM: {!! $value->dm !!}
		</p>
		<p class="col s12 m6 flow-text">
			HAS: {!! $value->has !!}
		</p>
		<p class="col s12 m6 flow-text">
			Caderneta de idoso: {!! $value->bookSenior !!}
		</p>
		<p class="col s12 m6 flow-text">
			Risco para a saúde bucal: {!! $value->oralHealthRisk !!}
		</p>
		<div class="center">
			<a href="{!! url('pacient') !!}" class="btn primary-color-lighten">Voltar</a>
		</div>
	<?php endforeach; ?>
</div>

@endsection
