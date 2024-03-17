<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Create Admin</title>
	</head>

	<body>

		<form method="post" action="/factures/create">
			
			     {{ csrf_field() }}

             <label for="ht_facture">Montant Hors tax:</label>
             <input type="number" id="ht_facture" name="ht_facture" >    
             <br>
             <label for="tva_facture">Tva:</label>
             <input type="number" id="tva_facture" name="tva_facture" >    
             <br>
             <label for="versement_facture">Versement:</label>
             <input type="number" id="versement_facture" name="versement_facture" >  
             <br>  
             <label for="timbre_facture">Droit Timbre:</label>
             <input type="number" id="timbre_facture" name="timbre_facture" >    
             <br>
               <label for="etat_paiment">etat de paiment</label>

               <select name="etat_paiment" id="etat_paiment">
                     <option value="oui">OUI</option>
                     <option value="non">NON</option> 
               </select>
               <br>
             <br>
			 <button type="submit">Valider</button>

			{{--  --}}
		</form>


		{{--  --}}
	</body>
</html>