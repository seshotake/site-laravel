@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')

    <section class="edit-profile">
        <h1>Edit Profile</h1>

        <div class="grid-2">

            <form method="post" action="{{ route('profile.edit', auth()->id()) }}">
                @csrf

                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name"
                    value="{{ old('first_name', auth()->user()->first_name) }}">

                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name"
                    value="{{ old('last_name', auth()->user()->last_name) }}">

                <label for="birthdate">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate"
                    value="{{ old('birthdate', auth()->user()->birthdate) }}">

                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" id="old_password">

                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password">

                <label for="new_password_confirmation">New Password Confirmation</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation">

                <input type="submit" value="Save">
            </form>

            @include('components.errors')

        </div>
    </section>
@endsection
