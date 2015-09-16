<!doctype html>
<html class="no-js" lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> Laravel Basics </title>
		<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
		<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
		<script src="{{ asset('js/vendor/modernizr.js') }}"></script>
	</head>

	<body>

		<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<li class="name">
							LexuCuFlexu
					</li>
				</ul>
		</nav>


		<div class="row">
			<div class="large-12">
				@yield('content')
			</div>
		</div>


		<footer class="row">
			<div class="large-12 columns">
				<hr>
				<div class="row">
					<div class="large-6 columns">
						<p> Power to the Zergs ! </p>
					</div>
				</div>
			</div>
		</footer>

		{{ HTML::script('js/vendor/jquery.js') }}
		<script src="{{ asset('js/foundation.min.js')}}"></script>
		<script>
    	$(document).foundation();
  	</script>
</body>
</html>
