

<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'événement</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <h1>{{ $evenements->name }}</h1>
        <p>{{ $evenements->description }}</p>

        <calendar-links 
            event-title="{{ $evenements->name }}" 
            event-description="{{ $evenements->description }}" 
            start-time="{{ $evenements->heure }}" 
            location="{{ $evenements->lieu }}"
        ></calendar-links>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
