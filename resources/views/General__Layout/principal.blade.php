<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/app.css">
	<title>PuzzleApp</title>
</head>
<body>
	<header>
		<div class="">
			<div class="container">
				<nav class="navbar Nav__Container">
					
					<ul class="navbar-nav List__Container">
						<li class="nav-item"><a href="/" class="nav-link">HOME</a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<section>
		@yield('content')
	</section>
	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous""></script>
</body>
</html>