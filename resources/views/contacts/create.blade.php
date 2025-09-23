<!DOCTYPE html>
<html>
<head>
    <title>Modulo Contatti</title>
</head>
<body>
    <h1>Modulo Contatti</h1>

    <!-- Link alla lista dei contatti -->
    <p><a href="{{ route('contacts.index') }}">Vedi tutti i messaggi inviati</a></p>

    <!-- Messaggio di conferma dopo l'invio -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Form per l'invio dei contatti -->
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <textarea name="message" placeholder="Messaggio" required></textarea><br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>
