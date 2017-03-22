@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
<nav class="primary-color">
  <div class="nav-wrapper">
    @if(Auth::check()) 
    <ul class="left">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('doctor')}}">Médicos</a></li>
      <li><a href="{{url('pacient')}}">Pacientes</a></li>
      <li><a href="{{ url('reports')}}">Relatórios</a></li>
      <li><a href="{{ url('ubs')}}">Ubs</a></li>
    </ul>
    @endif

    @if (Route::has('login'))
    <ul class="right">
      @if (Auth::check())
      <li>
        {{ $showUser->whoIs(Auth::user()->doctor_login) }}
      </li>
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout
      </a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
      @else
      <li><a href="{{ url('/login') }}">Login</a></li>
      @endif
    </ul>
    @endif
  </div>
</nav>
