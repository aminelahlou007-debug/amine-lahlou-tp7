<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f0f0f0; }
        .container { max-width: 1200px; margin: 0 auto; }
        .films-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; }
        .film-card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .film-title { color: #007bff; font-size: 18px; font-weight: bold; margin-bottom: 10px; }
        .film-meta { color: #666; font-size: 14px; margin: 5px 0; }
        .btn { background: #007bff; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; display: inline-block; margin-top: 15px; font-size: 14px; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        @if($films->isEmpty())
            <p>Aucun film trouvé dans la base de données.</p>
        @endif
        <div class="films-grid">
            @foreach($films as $film)
                <div class="film-card">
                    <div class="film-title">{{ $film->titre }}</div>
                    <div class="film-meta">{{ $film->genre }} • {{ $film->annee }}</div>
                    <div class="film-meta">{{ $film->pays }} | {{ $film->duree }}</div>
                    <a href="/films/{{ $film->id }}" class="btn">Détails</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
