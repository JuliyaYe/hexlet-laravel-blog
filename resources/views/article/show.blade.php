@extends('layouts.app')

@section('header', $article->title)

@section('content')
    <div>
        <p>{{$article->body}}</p>
    </div>
    
@endsection