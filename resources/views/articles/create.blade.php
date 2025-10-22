<!DOCTYPE html>
<html>
<head>
    <title>Crea un nuovo articolo</title>
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
            margin-bottom: 30px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #34495e;
        }

        input[type="text"],
        textarea,
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        button {
            display: inline-block;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
            transition: color 0.2s ease;
        }

        a:hover {
            color: #1d6fa5;
        }
    </style>
</head>
<body>

    <h1>Crea un nuovo articolo</h1>

    <form action="{{ route('articoli.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" required>

        <label for="category">Categoria:</label>
        <select id="category" name="category" required>
            <option value="">-- Seleziona una categoria --</option>
            @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="body">Contenuto:</label>
        <textarea id="body" name="body" required></textarea>

        <label for="image">Immagine (opzionale):</label>
        <input type="file" id="image" name="image" accept="image/*">

        <button type="submit">💾 Salva articolo</button>
    </form>

    <a href="{{ route('articoli.index') }}">← Torna all’elenco</a>

</body>
</html>
