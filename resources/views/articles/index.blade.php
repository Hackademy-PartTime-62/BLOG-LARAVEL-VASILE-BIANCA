<!DOCTYPE html>
<html>
<head>
    <title>Elenco articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">📰 Elenco Articoli</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('articoli.create') }}" class="btn btn-primary">➕ Crea nuovo articolo</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Titolo</th>
                <th>Categoria</th>
                <th>Contenuto</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td>{{ Str::limit($article->body, 50) }}</td>
                    <td class="text-center">
                        <a href="{{ route('articoli.edit', $article->id) }}" class="btn btn-warning btn-sm">✏️ Modifica</a>

                        <form action="{{ route('articoli.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')">🗑️ Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
