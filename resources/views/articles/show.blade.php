<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }}</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8fafc;
            padding: 40px;
            text-align: center;
        }
        img {
            max-width: 500px;
            border-radius: 16px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        p {
            max-width: 600px;
            margin: 10px auto;
            line-height: 1.5;
            color: #444;
        }
        .back-link {
            display: inline-block;
            margin-top: 30px;
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>{{ $article->title }}</h1>

    @if($article->image_path)
        <img src="{{ Storage::url($article->image_path) }}" alt="Immagine articolo">
    @endif

    <p><strong>Categoria:</strong> {{ $article->category }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>

    <a href="{{ route('articoli.index') }}" class="back-link">← Torna all’elenco</a>
</body>
</html>
