@extends('layouts.main-layout')
@section('head')
    <title>EDIT</title>
@endsection
@section('content')
    <h1 style="color: red" class="text-center fw-bold">[{{ $comic->id }}] Edit</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">

        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $comic->description }}">

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">

        <button type="submit" value="UPDATE" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
