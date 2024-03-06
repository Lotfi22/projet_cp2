<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Sport</title>
	</head>

	<body>

		<form method="post" action="/abonnements/create">
			
			{{ csrf_field() }}

			<input id="type_abonnement" type="text" name="type_abonnement" placeholder="Type d'abonnement">
			<input id="nbr_seances" type="number" name="nbr_seances_abonnement" placeholder="Nombre de seances">
            <input id="tarif_abonnement" type="number" name="tarif_abonnement" placeholder="Tarif de l'abonnement">
			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>