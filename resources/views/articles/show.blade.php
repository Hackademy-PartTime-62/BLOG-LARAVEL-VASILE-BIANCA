<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>{{ $article->title }}</h1>

    @if($article->image_path)
        <div>
            <img src="{{ Storage::url($article->image_path) }}" alt="Immagine di {{ $article->title }}">
        </div>
    @endif

    <p><strong>Categoria:</strong> {{ $article->category }}</p>

    <div>
        <strong>Contenuto:</strong> {!! nl2br(e($article->body)) !!}
    </div>

    <p><a href="{{ route('articoli.index') }}">← Torna all’elenco</a></p>
</body>
</html>
