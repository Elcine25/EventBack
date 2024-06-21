<!-- resources/views/event/details.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'événement</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <h1>{{ $evenements->nom }}</h1>
        <p>{{ $evenements->description }}</p>
        <p>{{ $evenements->lieu }}</p>
        <p>{{ $evenements->date }}</p>
        <p>{{ $evenements->heure }}</p>

        <add-to-calendar :event="{{ json_encode($evenements) }}"></add-to-calendar>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
1   