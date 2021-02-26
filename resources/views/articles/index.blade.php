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
                <th>Updated</th>
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
                <td>{{$article->updated_at}}</td>
                <td>
                    <a href="{{route('articles.show', ['article' => $article->id])}}" class="btn btn-primary">
                        <i class="fas fa-eye fa-lg fa-fw"></i>
                        View
                    </a>   
                    <a href="{{route('articles.edit', ['article' => $article->id])}}" class="btn btn-warning">
                        <i class="fas fa-pen fa-lg fa-fw"></i>
                        Edit
                    </a>
                    
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$article->id}}">
                        <i class="fas fa-trash fa-lg fa-fw"></i>
                    </button>

                    <div class="modal fade" id="destroy-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="post-destroy-{{$article->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="post-destroy-{{$article->id}}">Delete Article {{$article->title}} </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{route('articles.destroy', ['article' => $article->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
    
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection