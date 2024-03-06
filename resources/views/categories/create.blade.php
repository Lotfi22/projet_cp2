<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Sport</title>
	</head>

	<body>

		<form method="post" action="/categories/create">
			
			
			{{ csrf_field() }}

			<input id="nom_categorie" type="text" name="nom_categorie" placeholder="Nom de la categorie">
            <input id="discription" type="text" name="discription_categorie" placeholder="discription">
			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>