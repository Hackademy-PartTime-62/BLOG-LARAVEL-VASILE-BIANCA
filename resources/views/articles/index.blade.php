<!DOCTYPE html>
<html>
<head>
    <title>Elenco articoli</title>
</head>
<body>
    <h1>Elenco articoli</h1>

    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articoli.show', $article->id) }}">
                    {{ $article->title }} - {{ $article->category }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
