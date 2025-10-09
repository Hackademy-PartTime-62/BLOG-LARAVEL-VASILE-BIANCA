<!DOCTYPE html>
<html>
<head>
    <title>Elenco articoli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #333;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 15px;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .card h2 {
            font-size: 1.2rem;
            margin: 10px 0 5px;
            color: #34495e;
        }

        .card p {
            font-size: 0.95rem;
            color: #555;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background-color 0.2s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 25px;
            background-color: #2ecc71;
        }

        .add-btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

    <h1>Elenco articoli</h1>

    <a href="{{ route('articoli.create') }}" class="btn add-btn">+ Crea nuovo articolo</a>

    <div class="articles">
        @foreach($articoli as $article)
            <div class="card">
                @if($article->image_path)
                    <img src="{{ Storage::url($article->image_path) }}" alt="Immagine di {{ $article->title }}">
                @else
                    <img src="https://picsum.photos/400/200?random={{ $article->id }}" alt="Immagine casuale">
                @endif

                <h2>{{ $article->title }}</h2>
                <p><strong>Categoria:</strong> {{ $article->category }}</p>
                <p>{{ Str::limit($article->body, 100) }}</p>

                <a href="{{ route('articoli.show', $article->id) }}" class="btn">Leggi di più</a>
            </div>
        @endforeach
    </div>

</body>
</html>
