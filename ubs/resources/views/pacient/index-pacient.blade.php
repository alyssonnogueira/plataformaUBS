@extends('layouts.inside')
@section('content')

<body>
    <div class="section">
        <table align="center" width=900>
            <tr><td colspan="4" align="right">
                <button><a href="{!! url('pacient/create') !!}" class="btn btn-success" console="button"> Cadastrar Paciente </a></button>
                </td>
            </tr>
        </table>
        <table border="1" align="center" cellpadding="5" cellspacing="5" width=900>
            <tr><td colspan="4">Lista de Pacientes</td></tr>
            <tr><td>Id</td><td>Nome</td><td>Email</td><td>Ações</td></tr>
            <?php foreach ($pacients as $key => $value): ?>
                    <tr><td>{!! $value->id !!}</td><td>{!! $value->name !!}</td><td>{!! $value->email !!}</td><td>
                    <a href="{!! url('pacient/show/'.$value->id) !!}" class="btn btn-success" console="button">Visualizar</a>
                    <a href="{!! url('pacient/edit/'.$value->id) !!}" class="btn btn-primary" console="button">Editar</a>
                    <a href="{!! url('pacient/delete/'.$value->id) !!}" class="btn btn-danger" console="button">Remover</a></td></tr>
            <?php endforeach; ?>
    </table>
</div>
</body>
@endsection
