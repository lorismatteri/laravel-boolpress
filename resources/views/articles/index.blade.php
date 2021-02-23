@extends('layouts.app')

@section('title')
    Articoli
@endsection

@section('content')
    <h1>Lista Articoli</h1>
    <a href="{{route('articles.create')}}" class="btn bg-primary">Crea nuovo articolo</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article) 
            <tr>
                <td scope="row">{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
                <td>{{$article->created_at}}</td>
                <td>
                    <a href="{{route('articles.show', ['article' => $article->id])}}" class="btn btn-primary">
                        <i class="fas fa-eye fa-lg fa-fw"></i>
                        View
                    </a>   
                    <a href="{{route('articles.edit', ['article' => $article->id])}}" class="btn btn-warning">
                        <i class="fas fa-pen fa-lg fa-fw"></i>
                        Edit
                    </a>  
                    <form action="{{route('articles.destroy', ['article' => $article->id])}}" method="article">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash fa-lg fa-fw"></i>
                            Delete
                        </button>
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection