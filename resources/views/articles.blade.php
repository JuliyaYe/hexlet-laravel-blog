@extends('layouts.app')

@section('header', 'Статьи')

@section('content')
    <div>
        @foreach($articles as $article)
             <h2>{{ $article->title }}</h2>
             <p>{{ $article->body }}</p>
        @endforeach
    </div>
@endsection