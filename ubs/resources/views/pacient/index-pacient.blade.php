@extends('layouts.inside')
@section('content')

<div class="row">
<?php foreach ($pacients as $key => $value): ?>
    <div class="conteudo position-ref full-height">
            <table border="1">
                <tr><td colspan="4">Lista de Pacientes</td></tr>
                <tr><td>Id</td><td>Nome</td><td>Email</td><td>Ações</td></tr>
                <tr><td>{!! $value->id !!}</td><td>{!! $value->name !!}</td><td>{!! $value->email !!}</td><td> 
		<a href="{!! url('pacient/show/'.$value->id) !!}" class="btn btn-success" console="button"> Visualizar </a>
		<a href="{!! url('pacient/edit/'.$value->id) !!}" class="btn btn-primary" console="button"> Editar </a>
                <a href="{!! url('pacient/delete/'.$value->id) !!}" class="btn btn-danger" console="button"> Remover </a></td></tr>
            </table>
    </div>

<?php endforeach; ?>
</div>
@endsection
