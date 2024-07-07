@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Comic</h1>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $comic->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $comic->author }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="3" required>{{ $comic->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="publication_date">Publication Date</label>
            <input type="date" id="publication_date" name="publication_date" value="{{ $comic->publication_date }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ $comic->price }}" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" id="publisher" name="publisher" value="{{ $comic->publisher }}" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection