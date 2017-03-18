@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
@extends('layouts.inside')

@section('content')
                
<head>
 <link rel="stylesheet" href="/css/estilo.css" media="screen" title="no title" charset="utf-8" >
    <script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="/js/bootstrap.min.js"></script>
    <style type="text/css">
        .section{
            position:fixed;
            left:0px;
            top: 200px;
            width:100%;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="section">
        Médico {{ $showUser->whoIs(Auth::user()->doctor_login) }}, suas opções de administração estão acima, bom trabalho!.
        
    </div>
</body>
@endsection


