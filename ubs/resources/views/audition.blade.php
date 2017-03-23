@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
@extends('layouts.inside')

@section('content')

<div class="row">

  <?php foreach ($audition as $key => $value): ?>
    <p class="col s12 m6 flow-text">
      Data: {!! date_format(new DateTime($value->created_at), 'd/m/Y') !!}
    </p>
    <p class="col s12 m6 flow-text">
      Nutrição: {!! $value->nutrition !!}
    </p>
    <p class="col s12 m6 flow-text">
      Audição: {!! $value->hearing !!}
    </p>
    <p class="col s12 m6 flow-text">
      Visão: {!! $value->vision !!}
    </p>
    <p class="col s12 m6 flow-text">
      Humor / Depressão: {!! $value->humor_depression !!}
    </p>
    <p class="col s12 m6 flow-text">
      Cognição / Memória: {!! $value->cognition_memory !!}
    </p>
    <p class="col s12 m6 flow-text">
      Atividades diárias: {!! $value->daily_activies !!}
    </p>
    <p class="col s12 m6 flow-text">
      Tombo: {!! $value->tumble !!}
    </p>
  <?php endforeach; ?>
  <div class="center col s12">
    <a href="{!! url('home') !!}" class="btn primary-color-lighten">Voltar</a>
  </div>
</div>

@endsection
