<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Participation</title>
	</head>

	<body>

		<form method="post" action="/participations/create">
			
			{{ csrf_field() }}

			<input id="heure_debut" type="time" name="heure_debut" placeholder="heure debut">

			<input id="heure_fin" type="time" name="heure_fin" placeholder="heure fin">

			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>