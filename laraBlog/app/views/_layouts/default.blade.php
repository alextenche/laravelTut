<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>laraBlog</title>

	{{ HTML::style('css/style.css') }}

</head>
<body>

	<header>
		<div class="container">
			<h1>laraBlog</h1>
			<p>By alexTenche</p>		
		</div>
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			&copy; {{ date('Y') }} alexTenche | 
			{{ link_to_route('admin.posts.index', 'Admin') }}
		</div>
	</footer>

</body>
</html>