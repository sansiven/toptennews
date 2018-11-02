<!DOCTYPE html>
<html lang="en">
<head>
    <title>Topten Khabar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/all.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/tickr-style-red.css" type="text/css">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/multi.js"> </script>
</head>
<body>
	@include('inc.header')
	<div class="container">
	@yield('content')
	</div>
    @include('inc.footer')
</body>
</html>