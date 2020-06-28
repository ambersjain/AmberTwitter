@extends('layout')


@section('title')

@section('content')
    <h1>Edit your tweet</h1>

    Post a Tweet:
    <form action = "/tweet/{{$tweet->id}}" method = "POST">
        @method("PUT")
        <input type="text" name="title" value="{{$tweet->title}}">
        <input type="text" name="content_" value="{{$tweet->content}}">
        {{csrf_field()}}
        <button type="submit">Tweet</button>
    </form>

@endsection



