@extends('layouts.default')
@section('content')

		<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Freshwork Studio</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<style>
		html, body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Raleway', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin: 0;
		}
		h1 {
			font-weight: lighter;
		}
		.full-height {
			height: 100vh;
		}
		.flex-center {
			align-items: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}
		.position-ref {
			position: relative;
		}
		.content {
			text-align: center;
		}
		.title {
			font-size: 84px;
		}
		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}
		.m-b-md {
			margin-bottom: 30px;
		}
		.contact-info {
			position: fixed;
			bottom: 20px;
			font-size: 1.2em;
		}
		a {
			text-decoration: underline;
			color: #999;
		}
	</style>
</head>
<body>
<div class="flex-center position-ref full-height">

	<div class="content">
		<h1 class="title m-b-md">
			Freshwork Studio
		</h1>
	</div>
	<div class="contact-info">
		Gonzalo De Spirito - <a href="mailto:gonzalo@freshwork.cl">gonzalo@freshwork.cl</a>
	</div>
</div>
</body>
</html>

@endsection