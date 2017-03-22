<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'UBS Pelotas') }}</title>


	<!-- Scripts -->
	<script>
	window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
	]) !!};
	</script>

	{!! MaterializeCSS::include_full() !!}
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/layout.css') }}">

	<div class="card-panel flow-text center card-panel-title primary-color">UBS Pelotas</div>
