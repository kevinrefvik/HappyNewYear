<!doctype html>
<html lang="da">
	<head>
		<title>Nytår</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic,300italic,300' rel='stylesheet' type='text/css'>
		<style>
			body {font-family: 'Roboto Condensed', sans-serif;}

			h1 {margin-top: 100px; font-weight: 300; text-align: center;}
			h1 em {font-weight: 400;}

			.answer {font-size: 50px; font-weight: bold; text-transform: uppercase; text-align: center;}
			.answer.yes {color: green;}
			.answer.no {color: red;}
		</style>
	</head>

	<body>
		<h1>Må jeg sige <em>Godt Nytår?</em></h1>
		@if ($answer)
			<div class="answer yes">Ja</div>
		@else
			<div class="answer no">Nej</div>
		@endif
	</body>
</html>