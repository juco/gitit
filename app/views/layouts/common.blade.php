<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>

	{{ Html::style('bootstrap/css/bootstrap.min.css') }}
	<style>
		body {
			padding-top: 60px;
		}
	</style>
	@yield('css')
</head>

<body>

	<!-- Nav bar -->
	@include('menu.default')

	<div class="container">
		@yield('content')
	</div>
</body>
{{ Html::script('js/jquery.js') }}
{{ Html::script('bootstrap/js/bootstrap.js') }}
@yield('scripts')
</html>