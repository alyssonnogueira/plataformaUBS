@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
  @endif
<?php foreach ($doctor as $key => $value): ?>
<form action="{{ url('edit-doctor/'.$value->id)}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="form-group">
	    		<label for="titulo">Nome</label>
	    		<input name="titulo" type="text" class="form-control" id="titulo" placeholder="Nome" value="{!! $value->name !!}">
  			</div>
			<br>
			<div class="form-group">
			    <label for="conteudo">Conteudo</label>
			    <textarea class="form-control" name="conteudo" rows="8" cols="40"> {!! $value->password !!} </textarea>
			</div>
		</div>
			<div class="form-group">
				<label for="imagem">Imagem</label>
			</div>
	</div>
</div>
<button type="submit" class="btn btn-default">Salvar Alteração</button>
</form>
<?php endforeach; ?>
@endsection