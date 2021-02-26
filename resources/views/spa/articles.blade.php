@extends('layouts.app')

@section('title')
    API
@endsection

@section('content')
<h1>Articoli dalla API</h1>
<a class="nav-link" href="/api/articles">qui in formato json</a>

<div id="app">
    <div class="container">
        <div class="row justify-content-center">
            <articles-component></articles-component>
            <categories-component></categories-component>
        </div>
    </div>
</div>
@endsection