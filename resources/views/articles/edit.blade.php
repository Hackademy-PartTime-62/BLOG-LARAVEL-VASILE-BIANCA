<!DOCTYPE html>
<html>
<head>
    <title>Modifica Articolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">✏️ Modifica Articolo</h1>

    <form action="{{ route('articoli.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select id="category" name="category" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->name }}" {{ $article->category == $category->name ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Contenuto</label>
            <textarea id="body" name="body" rows="5" class="form-control" required>{{ old('body', $article->body) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine (opzionale)</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        @if($article->image_path)
            <div class="mb-3">
                <p>Immagine attuale:</p>
                <img src="{{ asset('storage/' . $article->image_path) }}" alt="Immagine articolo" width="150">
            </div>
        @endif

        <button type="submit" class="btn btn-success">💾 Salva modifiche</button>
        <a href="{{ route('articoli.index') }}" class="btn btn-secondary">← Torna indietro</a>
    </form>
</div>

</body>
</html>
