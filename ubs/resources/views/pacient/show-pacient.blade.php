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
<div class="section">
	<?php foreach ($pacient as $key => $value): ?>
            <table align="center" width=600>
                <tr><td align="center" colspan="2"><h2>Perfil: {!! $value->name !!}</h2></td></tr>
		<tr>	<td> Email: {!! $value->email !!} </td>
			<td> Rua: {!! $value->street !!} </td></tr>
		<tr>	<td> CEP: {!! $value->zip !!} </td>
			<td> Numero: {!! $value->number !!} </td></tr>
		<tr>	<td> Complemento: {!! $value->complement !!} </td>
			<td> Pais: {!! $value->country !!} </td></tr>
		<tr>	 <td> Estado: {!! $value->state !!} </td>
			 <td> Cidade: {!! $value->city !!}</td></tr>
		<tr>	 <td> Bairro: {!! $value->neighboorhood !!}</td> 
			 <td> CPF: {!! $value->cpf !!} </td> </tr>
		<tr>	 <td> Data de Nascimento: {!! $value->birth !!} </td>
			 <td> RG: {!! $value->rg !!} </td></tr>
		<tr>	 <td> Telefone: {!! $value->phone !!} </td>
			 <td> Estado Civil: {!! $value->civil_status !!} </td></tr>
                <tr>         <td> SUS: {!! $value->sus !!}</td>
                         <td> Peso: {!! $value->weight !!}</td></tr>
                <tr>         <td> Altura: {!! $value->height !!}</td>
                         <td> Cor: {!! $value->skinColor !!}</td></tr>
                <tr>         <td> Problema de locomoção: {!! $value->locomotionProblem !!}</td>
                         <td> Acamado: {!! $value->bedridden !!}</td></tr>
                <tr>         <td> Osteoporose: {!! $value->osteoporosis !!}</td>
                         <td> Depressão: {!! $value->depression !!}</td></tr>
                <tr>         <td> Insanidade: {!! $value->insanity !!}</td>
                         <td> Necessita cuidados: {!! $value->needCare !!}</td></tr>
                <tr>         <td> Perímetro do braço: {!! $value->armPerimeter !!}</td>
                         <td> DM: {!! $value->dm !!}</td></tr>
                <tr>         <td> HAS: {!! $value->has !!}</td>
                         <td> Caderneta de idoso: {!! $value->bookSenior !!}</td></tr>
                <tr>         <td> Risco para a saúde bucal: {!! $value->oralHealthRisk !!}</td></tr>
                <tr><td colspan="2" align="center"><button><a href="{!! url('pacient') !!}" class="btn btn-back" console="button"> Voltar </a></button></td></tr>
	<?php endforeach; ?>
            </table>
</div>

@endsection