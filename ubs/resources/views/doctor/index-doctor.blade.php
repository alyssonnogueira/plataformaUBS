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
    <table align="center" width=900>
        <tr><td colspan="4" align="right">
            <button><a href="{!! url('doctor/create') !!}" class="btn btn-success" console="button"> Cadastrar Médico </a></button>
            </td>
        </tr>
    </table>
    <table border="1" align="center" cellpadding="5" cellspacing="5" width=900>
        <tr><td colspan="4">Lista de Médicos</td></tr>
        <tr><td>Id</td><td>Nome</td><td>Email</td><td>Ações</td></tr>
        <?php foreach ($doctors as $key => $value): ?> 
            <tr><td>{!! $value->id !!}</td><td>{!! $value->name !!}</td><td>{!! $value->email !!}</td><td> 
                <a href="{!! url('doctor/show/'.$value->id) !!}" class="btn btn-success" console="button">Visualizar</a>
                <a href="{!! url('doctor/edit/'.$value->id) !!}" class="btn btn-primary" console="button">Editar</a>
                <a href="{!! url('doctor/delete/'.$value->id) !!}" class="btn btn-danger" console="button">Remover</a></td></tr>
        <?php endforeach; ?>
    </table>
</div>    
</body>
@endsection