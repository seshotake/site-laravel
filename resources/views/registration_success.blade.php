@extends('layouts.main')

@section('title', 'Registration Success')

@section('content')
    <section id="page-registration-successful">
        <div id="content">
            <h1>Congratulations!!! 🥳🥳🥳</h1>
            <p>If you see this page you are successfully registered.</p>
            <a href="{{ url('/') }}">Go back to the homepage</a>
        </div>
    </section>
@endsection
