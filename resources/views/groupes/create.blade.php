<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Groupe</title>
	</head>

	<body>

		<form method="post" action="/groupes/create">


			{{ csrf_field() }}

            <input id="capacite" type="text" name="capacite_groupe" placeholder="capacite groupe">
			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>