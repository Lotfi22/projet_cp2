<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nouveau gestionnaire</title>
	</head>

	<body>

		<form action="/gestionnaires/create"method="POST">
            {{ csrf_field() }}
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" maxlength="100" required><br>
    
            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom" maxlength="100" required><br>
    
            <label for="date_naissance">Date de naissance :</label><br>
            <input type="date" id="date_naissance" name="date_naissance" required><br>
    
            <label for="genre">Genre :</label><br>
            <select id="genre" name="genre" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select><br>
    
            <label for="num_tel">Numéro de téléphone :</label><br>
            <input type="tel" id="num_tel" name="num_tel" required><br>
    
            <label for="num_tel_urgence">Numéro de téléphone d'urgence :</label><br>
            <input type="tel" id="num_tel_urgence" name="num_tel_urgence"><br>
    
            <label for="adresse">Adresse :</label><br>
            <textarea id="adresse" name="adresse"></textarea><br>
    
            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br>
    
            <input type="submit" value="Valider">
        </form>


		{{--  --}}
	</body>
</html>