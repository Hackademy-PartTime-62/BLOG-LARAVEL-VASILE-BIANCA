<!DOCTYPE html>
<html>
<head>
    <title>Lista Articoli</title>
</head>
<body>
    <h1>Lista degli Articoli</h1>

    <p><a href="{{ route('articoli.create') }}">➕ Crea nuovo articolo</a></p>

    @if($articles->isEmpty())
        <p>Nessun articolo presente.</p>
    @else
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <thead style="background-color: #f2f2f2;">
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Descrizione</th>
                    <th>Contenuto</th>
                    <th>Creato il</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $index => $article)
                    <tr style="background-color: {{ $index % 2 == 0 ? '#ffffff' : '#
