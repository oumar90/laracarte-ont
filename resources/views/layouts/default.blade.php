<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laracarte</title>
	<meta charset="UTF-8">

	
	<link rel="stylesheet" href="/css/bootstrap.min.css">

	{{-- open sans google font --}}
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<style>
		body{
			font-family: 'Open Sans', Helvertica, Arial, sans-serif;
		}
		footer{
			margin: 4em 0;
		}
	</style>
</head>
<body>

	@include('layouts/partials/_nav')

	@yield('content')

	@include('layouts.partials._footer')

	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>