@inject('showUser', 'App\Http\Controllers\Auth\LoginController')
<html>
<head>
    <link rel="stylesheet" href="/css/estilo.css" media="screen" title="no title" charset="utf-8" >
    <script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="/js/bootstrap.min.js"></script>
    <style type="text/css">
        
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            padding:0px;
            margin:0px;
        }
            
 
	#menu ul {
            padding:0px;
            margin:0px;
            float: left;
            width: 100%;
            background-color:#EDEDED;
            list-style:none;
            font:100% Tahoma;
            position:relative;
            left:0px;
            top:0px;
            height:30px;
	}
 
	#menu ul li { display: inline; }
 
	#menu ul li a {
            background-color:#EDEDED;
            color: #333;
            text-decoration: none;
            border-bottom:3px solid #EDEDED;
            padding: 2px 10px;
            float:left;
	}
 
	#menu ul li a:hover {
            background-color:#D6D6D6;
            color: #6D6D6D;
            border-bottom:3px solid #EA0000;
	}     
        
           
    </style>
</head>

<body>
    <div id="menu">
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('doctor')}}">Médicos</a></li>
            <li><a href="{{url('pacient')}}">Pacientes</a></li>
            <li><a href="{{ url('reports')}}">Relatórios</a></li>
            <li><a href="{{ url('ubs')}}">Ubs</a></li>
            @if (Route::has('login'))
                @if (Auth::check())
                <li style="float:right"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ $showUser->whoIs(Auth::user()->doctor_login) }}
                </a></li>
                <li style="float:right"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>           
            @else
            <li style="float:right"><a href="{{ url('/login') }}">Login</a></li>
                @endif
            @endif           
        </ul>
    </div>
</body>
</html>