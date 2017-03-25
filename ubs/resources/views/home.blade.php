@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
@extends('layouts.inside')

@section('content')

<div class="">
  <p class="center flow-text">
    Testes anteriores.
  </p>
  <table class="bordered highlight centered" >
    <thead>
      <tr>
        <th>Paciente</th>
        <th>Data</th>
        <th>Visualizar</th>
      </tr>
    </thead>

    <tbody>
      <tbody>
        <?php foreach ($auditions as $key => $value): ?>
          <tr>
            <td>
              {!! $value->name !!}
            </td>
            <td>
              {!! date_format(new DateTime($value->created_at), 'd/m/Y'); !!}
            </td>
            <td>
              <a href="{!! url('audition/show/'.$value->seqAudition) !!}" class="action-color-font"><i class="material-icons">remove_red_eye</i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </tbody>
  </table>
</div>
<div class="">
  <p class="center flow-text">
    Consultas anteriores.
  </p>
  <table class="bordered highlight centered" >
    <thead>
      <tr>
        <th>Paciente</th>
        <th>Data</th>
        <th>Visualizar</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($consultations as $key => $value): ?>
        <tr>
          <td>
            {!! $value->name !!}
          </td>
          <td>
            {!! date_format(new DateTime($value->created_at), 'd/m/Y'); !!}
          </td>
          <td>
            <a href="{!! url('consultation/show/'.$value->seqConsultation) !!}" class="action-color-font"><i class="material-icons">remove_red_eye</i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
@endsection
