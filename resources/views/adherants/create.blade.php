<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Adherant</title>
</head>

<body>

	<form method="post" action="/adherants/create">
		{{ csrf_field() }}

			<label for="nom_adherant">Nom :</label>

            <br>

            <input id="nom_adherant" type="text" name="nom_adherant" placeholder="Nom adherant"><br>

            <label for="prenom_adherant">Prenom :</label>

            <br>

            <input id="prenom_adherant" type="text" name="prenom_adherant" placeholder="Prenom adherant">

            <br>

            <label for="genre">Genre</label>

            <br>

            <select name="genre" id="genre">

                <option value="feminin">feminin</option>

                <option value="masculin">masculin</option> 

            </select>

            <br>

            <label for="datenaissance">Date de naissance:</label>

            <br>

            <input type="date" id="datenaissance_adherant" name="datenaissance_adherant">

            <br>

            <label for="telephone">Numero telephone :</label>

            <br>

            <input type="tel" id="num_adherant" name="num_adherant" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">

            <br>

            <label for="telephone">Numero d'urgence :</label>

            <br>

            <input type="tel" id="num_urgence" name="num_urgence" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">

			<br>

            <input id="adresse" type="text" name="adresse_adherant" placeholder="adresse">

            <br>

            <label for="email">Email:</label>

            <br>

            <input type="email" id="email_adherant" name="email_adherant">

            <br>

			<button type="submit">Valider</button>

        {{--  --}}		
	</form>
    {{--  --}}
</body>
</html>