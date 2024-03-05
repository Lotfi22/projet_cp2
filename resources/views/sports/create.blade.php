<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Sport</title>
	</head>

	<body>

		<form method="post" action="/sports/create">
			
			{{ csrf_field() }}

			<input id="nom_sport" type="text" name="nom_sport" placeholder="Nom sport">

			<input id="description" type="text" name="description_sport" placeholder="description">

			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>