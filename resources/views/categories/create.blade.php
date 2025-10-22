@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Crea nuova categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome categoria</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
