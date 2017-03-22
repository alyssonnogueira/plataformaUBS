<html>
<title>
	UBS Pelotas
</title>
@include("pages.head")
<body>
	@section('sidebar')
	@include("pages.menu")

<div class="container">
	@yield('content')
</div>
	@include("pages.footer")
</body>
</html>
