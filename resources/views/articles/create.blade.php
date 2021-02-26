@extends('layouts.app')

@section('title')
    Crea 
@endsection

@section('content')
    <h1>Crea Articolo</h1>
        
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

    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{old('body')}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" name="tags[]" id="tags" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection