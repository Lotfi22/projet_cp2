<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Sport</title>
	</head>

	<body>

		<form method="post" action="/sous_categories/create">


			{{ csrf_field() }}

			<input id="nom_sous_categorie" type="text" name="nom_sous_categorie" placeholder="Nom de la sous-categorie">
            <input id="description" type="text" name="description_sous_categorie" placeholder="description">
			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>
