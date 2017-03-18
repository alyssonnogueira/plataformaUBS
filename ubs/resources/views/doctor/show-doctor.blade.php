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
            top: 150px;
            width:100%;
            text-align: left;
        }
        
    </style>
</head>
<body>
    <div class="section">
        <?php foreach ($doctor as $key => $value): ?>
            <table align="center" width=300>
                <tr></tr>
                <tr><td align="center"><h2>Perfil: {!! $value->name !!}</h2></td></tr>
                <tr><td>Email: {!! $value->email !!}</td></tr>
                <tr><td>Rua: {!! $value->street !!} </td></tr>
                <tr><td>CEP: {!! $value->zip !!} </td></tr>
                <tr><td>Numero: {!! $value->number !!}</td></tr> 
                <tr><td>Complemento: {!! $value->complement !!}</td></tr>
                <tr><td>Pais: {!! $value->country !!} </td></tr>
                <tr><td>Estado: {!! $value->state !!} </td></tr>
                <tr><td>Cidade: {!! $value->city !!}</td></tr>
                <tr><td>Bairro: {!! $value->neighboorhood !!}</td></tr>
                <tr><td>Chefe: {!! $value->boss !!} </td></tr>
                <tr><td>CPF: {!! $value->cpf !!} </td></tr>
                <tr><td>Data de Nascimento: {!! $value->birth !!} </td></tr>
                <tr><td>RG: {!! $value->rg !!}</td></tr>
                <tr><td>Telefone: {!! $value->phone !!}</td></tr>
                <tr><td>Estado Civil: {!! $value->civil_status !!}</td></tr>
                <tr><td align="center"><button><a href="{!! url('doctor') !!}" class="btn btn-back" console="button"> Voltar </a></button></td></tr>
            </table>
	<?php endforeach; ?>
    </div>
@endsection
</body>