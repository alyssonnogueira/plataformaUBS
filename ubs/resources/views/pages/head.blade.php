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
	<link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8" >

	<script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
	<script type="/js/bootstrap.min.js"></script>
</head>