@extends('layouts.app')

@section('content')
<div class="container-comics">
    <h1>Comics List</h1>
    <div class="card-container">
        @foreach($fumetti as $fumetto)
            <div class="comic-card">
                <h2><a href="{{ route("comics.show" , $fumetto->id)}}">{{$fumetto->title}}</a></h2>
                <p><strong>Author:</strong> {{ $fumetto->author }}</p>
                <p><strong>Description:</strong> {{ $fumetto->description }}</p>
                <p><strong>Publication Date:</strong> {{ $fumetto->publication_date }}</p>
                <p><strong>Price:</strong> ${{ $fumetto->price }}</p>
                <p><strong>Publisher:</strong> {{ $fumetto->publisher }}</p>
                <a href="{{ route('comics.edit', $fumetto->id) }}" class="edit-link">Modifica</a>
            </div>
        @endforeach
    </div>
</div>
@endsection



