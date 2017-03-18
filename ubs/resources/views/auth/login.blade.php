@extends('layouts.outside')

@section('content')
<html>
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
            text-align: center;
        }
        
        
    </style>
</head>
<body>
<div class="section">
    <table align="center">
        <tr><td><h2>Login</h2></td></tr>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <tr><td><label for="email" class="col-md-4 control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus></td></tr>

                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                <tr><td><label for="password" class="col-md-4 control-label">Senha</label>
                    <input id="password" type="password" class="form-control" name="password" required></td></tr>
                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>@endif
                <tr><td><label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label></td></tr>
                <tr><td><button type="submit" class="btn btn-primary">Login  </button><a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a></td></tr>
            </form>
        </table>
    </div>
    @endsection
</body>
</html>