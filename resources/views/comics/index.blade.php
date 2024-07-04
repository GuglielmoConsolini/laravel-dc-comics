@extends('layouts.app')

@section('content')
    <h1>Lista dei fumetti</h1>
    @foreach ($fumetti as $comic)
    <p><a href="{{ route("comics.show" , $comic->id)}}">{{$comic->title}}</a></p>
        
    @endforeach
@endsection