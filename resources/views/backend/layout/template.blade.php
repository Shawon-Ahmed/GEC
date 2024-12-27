
<!doctype html>
<html lang="en" class="semi-dark">
<head>
    @include('backend.includes.header')
    @include('backend.includes.css')
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		@include('backend.includes.sidebar')
        @include('backend.includes.topbar')
		@yield('body-content')
		@include('backend.includes.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('backend.includes.theme')
	@include('backend.includes.js')
</body>
</html>
