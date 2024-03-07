<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Create Seance</title>

	</head>


	<body>
		<form action="/seances/create" method="post">

			{{ csrf_field() }}

			<input id="heure_debut" type="time" name="heure_debut">

			<input id="heure_fin" type="time" name="heure_fin">

			<button type="submit">Valider</button>

		{{--  --}}
		</form>
	{{--  --}}
	</body>

</html>