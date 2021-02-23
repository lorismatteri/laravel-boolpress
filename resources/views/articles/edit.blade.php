@extends('layouts.app')

@section('title')
    Modifica {{ $article->title }}
@endsection

@section('content')
    <h1>Modifca {{$article->title}}</h1>
        
    <!-- errori -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{route('articles.update', ['article' => $article->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection