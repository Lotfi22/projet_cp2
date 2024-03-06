<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Admin</title>
	</head>

	<body>

		<form method="post" action="/salles/create">
			
			{{ csrf_field() }}

             <label for="capacite_salle">Capacite:</label>
             <input type="number" id="capacite_salle" name="capacite_salle" >    
             <br>
             <label for="num_machine_salle">Nombre de machine:</label>
             <input type="number" id="num_machine_salle" name="num_machine_salle" >    
             <br>
             <label for="superficie_salle">Superficie:</label>
             <input type="number" id="superficie_salle" name="superficie_salle" >  
             <br>  
             
			 <button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>