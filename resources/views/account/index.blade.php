@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-3">👋 Benvenuto, {{ Auth::user()->name }}!</h1>
    <p class="text-muted">Hai effettuato l'accesso correttamente.</p>

    <a href="{{ route('articoli.index') }}" class="btn btn-primary mt-3">Vai agli articoli</a>

    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger">
            Esci <span style="font-size: 1.2em;">👋</span>
        </button>
    </form>
</div>
@endsection
