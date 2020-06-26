@extends('layout')


@section('title')
    <h1>AmberTwitter</h1>

@section('content')
    <h3>{{$tweet->title}}</h3>
    <p>{{$tweet->content}}</p>
@endsection
