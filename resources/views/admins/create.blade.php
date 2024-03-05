<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Admin</title>
	</head>

	<body>

		<form method="post" action="/admins/create">
			
			{{ csrf_field() }}

			<input id="nom_admin" type="text" name="nom_admin" placeholder="Nom admin"><br>

            <input id="prenom_admin" type="text" name="prenom_admin" placeholder="Prenom admin"><br>

                <label for="genre">genre</label>

               <select name="genre" id="genre">
                     <option value="feminin">feminin</option>
                     <option value="masculin">masculin</option> 
               </select>
               <br>
             <label for="datenaissance">Date naissance:</label>
             <input type="date" id="datenaissance_admin" name="datenaissance_admin">
             <br>
             <label for="telephone">Entrer votre numero telephone :</label>
             <input type="tel" id="num_admin" name="num_admin" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">
             <br>
             <label for="telephone">Entrer votre numero telephone d'urgence :</label>
             <input type="tel" id="num_urgence" name="num_urgence" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">
			 <br>
             <input id="adresse" type="text" name="adresse_admin" placeholder="adresse">
             <br>
             <label for="email">Entrer votre email:</label>
             <input type="email" id="email_admin" name="email_admin">
             <br>
			 <button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>