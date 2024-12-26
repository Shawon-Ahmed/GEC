
<!DOCTYPE html>
<html>
	<head>

		@include('frontend.include.header')

		@include('frontend.include.css')

	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		<div class="body">
        @include('frontend.include.menubar')

        @yield('body-content')

        @include('frontend.include.footer')
		</div>

		@include('frontend.include.js')

	</body>
</html>
