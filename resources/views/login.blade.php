@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <section class="page-login">
        <h1>Login Form</h1>

        <div class="grid-2">
            <form method="post" action="{{ route('auth.login') }}">
                @csrf

                <label for="login">Login:</label>
                <input type="text" name="login" id="login" value="{{ old('login') }}" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>

                <input type="submit" value="Login">
            </form>

            @include('components.errors')
        </div>
    </section>
@endsection
