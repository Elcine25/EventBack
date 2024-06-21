<!DOCTYPE html>
<html>
<head>
    <title>Nouveau événement dans votre catégorie préférée</title>
</head>
<body>
    <p>Bonjour {{ $name }},</p>
    <p>Un nouvel événement a été programmé dans la catégorie que vous suivez :</p>
    <p><strong>{{ $evenement->name }}</strong></p>
    <p>{{ $evenement->description }}</p>
    <p>Merci de votre intérêt !</p>
</body>
</html>