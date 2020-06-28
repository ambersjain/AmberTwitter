@extends('layout')


@section('title')
    <h1>AmberTwitter</h1>

@section('content')

    Post a Tweet:
    <form action = "/store" method = "post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content_" placeholder="Content">
        {{csrf_field()}}
        <button type="submit">Tweet</button>
    </form>

    Recent Tweets:

<ul>
    @foreach($messages as $message)
        <li>
            <strong>{{$message->title}} </strong><br>
            {{$message->content}}
            <br>
            {{$message->created_at->diffForHumans()}}
            <br>
            <a href="/tweet/{{$message->id}}">Go to Tweet</a>
            <br>
            <a href="/tweet/{{$message->id}}/edit">Edit</a>
        </li>
    @endforeach
</ul>

@endsection
