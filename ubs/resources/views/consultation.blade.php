@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
@extends('layouts.inside')

@section('content')

<div class="row">

  <?php foreach ($consultation as $key => $value): ?>
    <p class="col s12 m6 flow-text">
      Data: {!! date_format(new DateTime($value->created_at), 'd/m/Y') !!}
    </p>
    <p class="col s12 m6 flow-text">
      Pressão sanguinea: {!! $value->blood_presure !!}
    </p>
    <p class="col s12 m6 flow-text">
      Observações: {!! $value->observations !!}
    </p>
    <p class="col s12 m6 flow-text">
      Altura: {!! $value->weight !!}
    </p>
    <p class="col s12 m6 flow-text">
      Exame do pé: {!! $value->foot_exam !!}
    </p>
  <?php endforeach; ?>
  <div class="center col s12">
    <a href="{!! url('home') !!}" class="btn primary-color-lighten">Voltar</a>
  </div>
</div>

@endsection
