<html>
<title>
	UBS Pelotas @yield('title')
</title>
@include("pages.head")
<body>
	@section('sidebar')
	@include("pages.menu")


	@yield('content')
	@include("pages.footer")
</body>
</html>
