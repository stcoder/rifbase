<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{ HTML::style("/vendor/bootstrap/dist/css/bootstrap.min.css") }}
{{ HTML::style("/css/common.css") }}
</head>
<body>

<div class="page">
	<div class="page__container container">
		@yield('content')
	</div>
</div>

{{ HTML::script("/vendor/jquery/dist/jquery.min.js") }}
{{ HTML::script("/vendor/bootstrap/dist/js/bootstrap.min.js") }}
</body>
</html>