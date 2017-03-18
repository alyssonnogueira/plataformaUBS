@extends('layouts.outside')

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
            height: 100px;
        }
        
    </style>
</head>

<body>
    <div class="section">
        Idoso, clique aqui e saiba quando será sua próxima consulta. 
    </div>
    @endsection
</body>