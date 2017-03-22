@extends('layouts.inside')
@section('content')
<div class="row">
  <div class="col s12 center flow-text">
    <p>
      Lista de Médicos
    </p>
  </div>
  <table class="centered bordered highlight">
    <thead>

      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Visualizar</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($doctors as $key => $value): ?>
        <tr>
          <td>{!! $value->id !!}</td>
          <td>{!! $value->name !!}</td>
          <td>{!! $value->email !!}</td>
          <td>
            <a href="{!! url('doctor/show/'.$value->id) !!}" class="action-color-font"><i class="material-icons">remove_red_eye</i></a>
          </td>
          <td>
            <a href="{!! url('doctor/edit/'.$value->id) !!}" class="action-color-font"><i class="material-icons">edit</i></a>
          </td>
          <td>
            <a href="{!! url('doctor/delete/'.$value->id) !!}" class="action-color-font"><i class="material-icons">delete</i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light action-color" href="{!! url('doctor/create') !!}"><i class="material-icons">add</i></a>
  </div>

</div>
@endsection
