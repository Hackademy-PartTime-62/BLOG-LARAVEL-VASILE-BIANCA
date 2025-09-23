<!DOCTYPE html>
<html>
<head>
    <title>Lista Contatti</title>
</head>
<body>
    <h1>Lista dei Contatti</h1>

    <!-- Link per tornare al form -->
    <p><a href="{{ route('contacts.create') }}">Torna al modulo contatti</a></p>

    @if($contacts->isEmpty())
        <p>Nessun messaggio salvato.</p>
    @else
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <thead style="background-color: #f2f2f2;">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Messaggio</th>
                    <th>Creato il</th>
                </tr>
            </thead>
           <tbody>
    @foreach($contacts as $index => $contact)
        <tr style="background-color: {{ $index % 2 == 0 ? '#ffffff' : '#f9f9f9' }};">
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at }}</td>
        </tr>
    @endforeach
</tbody>

        </table>
    @endif
</body>
</html>
