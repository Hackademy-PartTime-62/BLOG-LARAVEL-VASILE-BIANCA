<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Benvenuto nel Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fb;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 40px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 12px;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>
    <h1>👋 Benvenuto nel tuo Blog!</h1>
    <p>Crea, esplora e condividi i tuoi articoli con semplicità.</p>

    <div>
        <a href="{{ route('articoli.index') }}" class="btn">📚 Vai agli articoli</a>
    </div>
</body>
</html>
