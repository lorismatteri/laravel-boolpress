@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <p>{{$article->body}}</p>
        <p>Categroy: {{$article->category ? $article->category->name : 'N/A'}}</p>
        <div class="tag">
            Tags:
            @if(count($article->tags) > 0)
                @foreach($article->tags as $tag)
                    <span>{{$tag->name}}</span>
                @endforeach
            @else
                <span>N/A</span>
            @endif
        </div>
    </div>
@endsection