@extends('layouts.outside')

@section('content')
<div class="center">
  <h2>Login</h2>
  <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <label for="email" class="col-md-4 control-label">E-Mail</label>
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

    @if ($errors->has('email'))
    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
    @endif
    <label for="password" class="col-md-4 control-label">Senha</label>
    <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>@endif
    <button type="submit" class="btn primary-color-darken">ENTRAR</button>
  </form>
</div>
@endsection
