@extends('layouts.app')

@section('content')
    <h1>Lista dei fumetti</h1>
    @foreach ($fumetti as $comic)
    <p>{{$comic->title}}</p>
        
    @endforeach
@endsection