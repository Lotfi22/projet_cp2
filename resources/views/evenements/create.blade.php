<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement</title>
</head>
<body>
    <h2>Ajouter un événement</h2>
    <form action="/evenements/create" method="POST">
        {{ csrf_field() }}

        <label for="nom_evenement">Nom de l'événement :</label><br>
        <input type="text" id="nom_evenement" name="nom_evenement" required><br>

        <label for="date_evenement">Date de l'événement :</label><br>
        <input type="date" id="date_evenement" name="date_evenement" required><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
