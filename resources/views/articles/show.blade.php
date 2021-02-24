@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <p>{{$article->body}}</p>
        <p>Categroy: {{$article->category ? $article->category->name : 'N/A'}}</p>
    </div>
@endsection