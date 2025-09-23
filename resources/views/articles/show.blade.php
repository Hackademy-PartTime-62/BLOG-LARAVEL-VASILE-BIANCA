<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p><strong>Categoria:</strong> {{ $article->category }}</p>
    <p><strong>Descrizione:</strong> {{ $article->description }}</p>
    <p><strong>Visibile:</strong> {{ $article->visible ? 'Sì' : 'No' }}</p>
    <div>
        <strong>Contenuto:</strong> {!! nl2br(e($article->body)) !!}
    </div>

    <p><a href="{{ route('articoli.index') }}">← Torna all’elenco</a></p>
</body>
</html>
