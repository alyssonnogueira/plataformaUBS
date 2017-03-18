<!DOCTYPE html>
<html>
	<title>UBS Pelotas - @yield('title')</title>
        @include("pages.head")
<body>
	@section('sidebar')
        @include("pages.menu")
	<div class="section">
	@yield("content")
	</div>
        @include("pages.footer")
</body>
</html>

