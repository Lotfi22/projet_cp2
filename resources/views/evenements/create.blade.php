<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un événement</title>
</head>
<body>
    <h2>Ajouter un événement</h2>
    <form action="/evenements/create" method="post">
        {{ csrf_field() }}

        <label for="nom_evenement">Nom de l'événement :</label><br>
        <input id="nom_evenement" type="text" id="nom_evenement" name="nom_evenement" placeholder="Nom de l'evenement'" required><br>

        <label for="date_evenement">Date de l'événement :</label><br>
        <input id="date_evenement" type="date" id="date_evenement" name="date_evenement" placeholder="date d'evenement" required><br>

        <button type="submit">Valider</button>
    </form>
</body>
</html>


