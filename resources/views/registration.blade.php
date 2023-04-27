@extends('layouts.main')

@section('title', 'Registration')

@section('content')

<section class="page-registration">
    <h1>Registration Form</h1>

    <div class="grid-2">
        <form method="post" action="{{ route('auth.register') }}">
            @csrf

            <label for="login">Login:</label>
            <input type="text" name="login" id="login" value="{{ old('login') }}" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <label for="password_confirmation">Repeat Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" required><br>

            <label for="captcha">Enter the characters shown in the picture:</label>
            <img src="{{ captcha_src() }}" alt="captcha">
            <input type="text" name="captcha" id="captcha" required>

            <input type="submit" value="Register">
        </form>

       @include('components.errors')
    </div>
</section>

@endsection
