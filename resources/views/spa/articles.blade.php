@extends('layouts.app')

@section('title')
    API
@endsection

@section('content')
<h1>Articoli dalla API</h1>
<a class="nav-link" href="/api/articles">qui in formato json</a>

<div id="app">
    <articles-component></articles-component>
</div>
@endsection