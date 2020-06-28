@extends('layout')


@section('content')
    <h3>{{$tweet->title}}</h3>
    <p>{{$tweet->content}}</p>
    <a href="/tweet/{{$tweet->id}}/edit">Edit</a>
@endsection
