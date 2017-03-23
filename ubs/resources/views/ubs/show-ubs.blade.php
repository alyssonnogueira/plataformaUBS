@extends('layouts.inside')

@section('content')
<div class="row">

	<?php foreach ($ubs_list as $key => $value): ?>
		<p class="col s12 m6 flow-text">
			Nome: {!! $value->name !!}
		</p>
		<div class=" col s12 center">
			<a href="{!! url('ubs') !!}" class="btn primary-color-lighten">Voltar</a>
		</div>
	<?php endforeach; ?>
</div>

@endsection
