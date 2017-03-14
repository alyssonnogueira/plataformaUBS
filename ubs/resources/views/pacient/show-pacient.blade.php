@extends('layouts.inside')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<center>
				<img src="{!!url($post->imagem) !!}" alt="" />			
			</center>
			
		</div>
		<div class="row">
			<h3> {!! $post->titulo !!} </h3>
			<br>
			{!! $post->conteudo !!}
		</div>
	</div>
</div>

@endsection