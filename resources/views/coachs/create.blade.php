<!DOCTYPE html>

<html>




    <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Coach</title>
    </head>

    <body>

    <form method="post" action="/coachs/create">
			
			{{ csrf_field() }}

			<input id="nom_coach" type="text" name="nom_coach" placeholder="Nom coach">
			<input id="prenom_coach" type="text" name="prenom_coach" placeholder="Prenom coach"><br>
                <label for="genre">genre</label>

               <select name="genre" id="genre">
                     <option value="feminin">feminin</option>
                     <option value="masculin">masculin</option> 
               </select>
			   <br>
             <label for="datenaissance">Date naissance:</label>
             <input type="date" id="datenaissance_coach" name="datenaissance_coach">
             <br>
             <label for="telephone">Entrer votre numero telephone :</label>
             <input type="tel" id="num_coach" name="num_coach" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">
             <br>
             <label for="telephone">Entrer votre numero telephone d'urgence :</label>
             <input type="tel" id="num_urgence" name="num_urgence" pattern="[0]{1}-[5-7]{1}-[0-9]{8}">
			 <br>
             <input id="adresse" type="text" name="adresse_coach" placeholder="adresse">
             <br>
             <label for="email">Entrer votre email:</label>
             <input type="email" id="email_coach" name="email_coach">
             <br>
          
			<button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
    </body>






</html>