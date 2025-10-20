@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Login</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input id="email" type="email" class="form-control" name="email" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Ricordami</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Accedi</button>
    </form>
</div>
@endsection
