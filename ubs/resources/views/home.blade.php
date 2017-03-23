@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
@extends('layouts.inside')

@section('content')
<body>
    <div class="section">
        Médico {{ $showUser->whoIs(Auth::user()->doctor_login) }}, suas opções de administração estão acima, bom trabalho!.

    </div>
</body>
@endsection
