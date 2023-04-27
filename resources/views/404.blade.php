@extends('layouts.main')

@section('title', 'Oops! Page Not Found')

@section('content')
    <section id="page-404">
        <div id="content">
            <h1>Oops! Page Not Found</h1>
            <p>The page you are looking for could not be found. Please check the URL and try again, or use the navigation
                menu
                to find what you are looking for.</p>
            <a href="{{ url('/') }}">Go back to the homepage</a>
        </div>
    </section>
@endsection
