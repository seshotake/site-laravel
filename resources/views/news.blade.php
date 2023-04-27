@extends('layouts.main')

@section('title', 'News')

@section('content')
    <section id="news-page">
        <h1>News</h1>

        @foreach ($news as $item)
            <article>
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->content }}</p>
            </article>
        @endforeach
    </section>
@endsection
