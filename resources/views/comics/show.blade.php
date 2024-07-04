@extends('layouts.app')

@section('content')
    <h2>{{$comic->title}}</h2>
    <h3>{{$comic->description}}</h3>
    <p>{{$comic->author}}</p>
@endsection