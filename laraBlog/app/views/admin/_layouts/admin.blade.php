<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>laraBlog admin panel</title>

	{{ HTML::style('css/admin.css') }}

</head>
<body>

	<header>
		<div class="container">
			<h1>laraBlog admin panel</h1>		
		</div>
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			&copy; {{ date('Y') }} alexTenche 
		</div>
	</footer>

</body>
</html>