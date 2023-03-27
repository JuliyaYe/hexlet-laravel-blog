@extends('layouts.app')

@section('header', 'Статьи')

@section('content')
    <div>
        @foreach($articles as $article)
             <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h2>
             <p>{{ $article->body }}</p>
        @endforeach
        {{ $articles->links()}}
    </div>
    
@endsection