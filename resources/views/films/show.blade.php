<!DOCTYPE html>
<html>
<head>
    <title>{{ $film->titre }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; }
        h1 { color: #333; }
        .info { background: #f5f5f5; padding: 20px; border-radius: 5px; }
        .info p { margin: 10px 0; }
        .btn { background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 3px; display: inline-block; margin-top: 15px; }
    </style>
</head>
<body>
    <h1>{{ $film->titre }} ({{ $film->annee }})</h1>
    <div class="info">
        <p><strong>Pays:</strong> {{ $film->pays }}</p>
        <p><strong>Genre:</strong> {{ $film->genre }}</p>
        <p><strong>Durée:</strong> {{ $film->duree }}</p>
    </div>
    <a href="/films/{{ $film->id }}/acteurs" class="btn">Voir les acteurs</a>
</body>
</html>
