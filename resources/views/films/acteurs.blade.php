<!DOCTYPE html>
<html>
<head>
    <title>Acteurs - {{ $film->titre }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { color: #333; }
        .subtitle { color: #666; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #333; color: white; }
        tr:hover { background: #f5f5f5; }
        .badge { background: #007bff; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="subtitle">Casting officiel • Année de sortie : {{ $film->annee }}</div>
    <h1>{{ $film->titre }}</h1>
    
    <table>
        <thead>
            <tr>
                <th>Acteur</th>
                <th>Rôle</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($acteurs as $acteur)
                <tr>
                    <td>{{ $acteur->prenom }} {{ $acteur->nom }}</td>
                    <td>{{ $acteur->role }}</td>
                    <td><span class="badge">{{ $acteur->typeRole }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
