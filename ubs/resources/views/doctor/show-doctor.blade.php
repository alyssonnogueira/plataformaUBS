@extends('layouts.inside')

@section('content')
<div class="row">
<?php foreach ($doctor as $key => $value): ?>
	<div class="col-md-12">
	<h1> Perfil </h1>
		<div class="row">
			<center>
			</center>
			
		</div>
		<div class="row">
			<h3> Doutor: {!! $value->person_doctor !!} </h3>
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
			 <h3> Chefe: {!! $value->boss !!} </h3>
			 <h3> CPF: {!! $value->cpf !!} </h3> 
			 <h3> Data de Nascimento: {!! $value->birth !!} </h3>
			 <h3> RG: {!! $value->rg !!} </h3>
			 <h3> Telefone: {!! $value->phone !!} </h3>
			 <h3> Estado Civil: {!! $value->civil_status !!} </h3>
			 <a href="{!! url('doctor') !!}" class="btn btn-back" console="button"> Voltar </a>
 			<br>
		</div>
	</div>
	<?php endforeach; ?>
</div>

@endsection