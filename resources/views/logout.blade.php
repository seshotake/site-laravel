@extends('layouts.main')

@section('title', 'Logout')

@section('content')
    <section id="page-logout">
        <h1>Logout</h1>

        <div class="logout">
            <p>Are you sure you want to logout?</p>

            <form method="post" action="{{ route('auth.logout') }}">
                @csrf

                <input type="submit" value="Logout">
            </form>
        </div>
    </section>
@endsection
