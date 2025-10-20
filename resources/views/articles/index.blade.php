@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">📰 Tutti gli Articoli</h1>

    @if ($articles->isEmpty())
        <p class="text-center text-muted">Nessun articolo disponibile al momento.</p>
    @else
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        {{-- Immagine articolo --}}
                        @if ($article->image_path)
                            <img src="{{ asset('storage/' . $article->image_path) }}" class="card-img-top" alt="Immagine articolo">
                        @else
                            <img src="https://via.placeholder.com/400x200?text=Placeholder" class="card-img-top" alt="Placeholder">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p><strong>Categoria:</strong> {{ $article->category ?? 'Senza categoria' }}</p>
                            <p class="card-text text-truncate">{{ $article->content }}</p>

                            <a href="{{ route('articoli.show', $article->id) }}" class="btn btn-primary">
                                Leggi di più
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            🏠 Torna alla Home
        </a>
    </div>
</div>
@endsection
