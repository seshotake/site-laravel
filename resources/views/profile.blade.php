@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <section id="page-profile">
        <h1>Profile</h1>

        <div class="profile">
            @if ($user = Auth::user())
                <p>Your Full Name: <b>{{ $user->getFullName() }}</b></p>
                <p>Birthdate: <b>{{ $user->birthdate }}</b></p>
                <p>Login: <b>{{ $user->login }}</b></p>
                <p>Email: <b>{{ $user->email }}</b></p>
                <p>Role: <b>{{ $user->role ? 'Admin' : 'User' }}</b></p>
            @endif

            <a href="{{ url('/?action=edit_profile') }}">Edit Profile</a>
        </div>
    </section>
@endsection
