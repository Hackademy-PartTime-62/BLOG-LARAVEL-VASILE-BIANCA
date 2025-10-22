@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Modifica categoria</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome categoria</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
