@extends('layouts.outside')

@section('content')

<div class="row ">

  <div class="col s12 center search-container">
    <div class="row">
      <p>
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text">
          <label for="icon_prefix">CPF</label>
        </div>
      </p>
      <p>
        <div class="col s12 m6">
          <a class="btn action-color" >BUSCAR CONSULTAS</a>
        </div>
      </p>
    </div>
  </div>
</div>

@endsection
