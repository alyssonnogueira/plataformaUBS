@extends('layouts.inside')
@section('content')
<p>
	Lista de Médicos
</p>
<div class="row">
	<?php foreach ($doctors as $key => $value): ?>
		<div class="col-md-4">
			<div class"thumbnail">
				<div class="caption">
					<h3>Id: {!! $value->id !!}</h3>
					<h3>Nome: {!! $value->name !!}</h3>
					<h3>Email: {!! $value->email !!}</h3>
					<span class="pull-right"> {!! $value->created_at !!}</span>
					<p>
						<a href="{!! url('doctor/show/'.$value->id) !!}" class="btn btn-success" console="button"> Visualizar </a>
						<a href="{!! url('doctor/edit/'.$value->id) !!}" class="btn btn-primary" console="button"> Editar </a>
						<a href="{!! url('doctor/delete/'.$value->id) !!}" class="btn btn-danger" console="button"> Remover </a>
					</p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
@endsection