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
        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8" >
        <link rel="stylesheet" href="/css/bootstrap.css" media="screen" title="no title" charset="utf-8" >
        <link rel="stylesheet" href="/css/bootstrap.theme.min.css" media="screen" title="no title" charset="utf-8" >
        <link rel="stylesheet" href="/css/bootstrap.theme.css" media="screen" title="no title" charset="utf-8" >
	<script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
	<script type="/js/bootstrap.min.js"></script>
        <style type="text/css">
            .header{
                position:relative;
                left:0px;
                top:0px;
                height:120px;
                width:100%;
                background:#999;  
                font-size: 20px;
            }
            
            .titulo{
               text-align: center;
               font-size: 36px;
               color: #FFF;
            }
        </style>
</head>
<body>
    <div class="header">
        <br>
        <div class="titulo">
            UBS Pelotas
        </div>
    </div>
</body>