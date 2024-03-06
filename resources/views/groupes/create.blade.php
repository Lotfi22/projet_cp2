
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
    
    <label for="numberInput">Capacite:</label>
    <input type="number" id="numberInput" value="20" min="0" max="100">
    <script src="script.js"></script>
    <br>
    <button type="submit">Valider</button>

    {{--  --}}
    </form>
    {{--  --}}
    </body>
    

</html>